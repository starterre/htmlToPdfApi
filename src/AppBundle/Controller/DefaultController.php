<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('html_content', TextareaType::class, array(
                'attr' => array('cols' => '50', 'rows' => '15'),
                'label' => false
            ))
            ->add('generer', SubmitType::class, array(
                'label' => 'Générer le pdf !'
            ))
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $data = $form->getData();

            $baseurl = $request->getScheme() . '://' . $request->getHttpHost();
            $pdfContent = $this->getContentPdf($data['html_content'], $baseurl);

            return new Response(
                $pdfContent,
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="file.pdf"'
                )
            );
        }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/htmltopdf", name="htmltopdf")
     */
    public function htmlToPdfAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $baseurl = $request->getScheme() . '://' . $request->getHttpHost();

            $htmlContent = $request->request->get('html_content');

            return new JsonResponse(array('pdf_content' => utf8_encode($this->getContentPdf($htmlContent, $baseurl))));
        }
    }

    public function getContentPdf($htmlContent, $baseurl)
    {
        $htmlContent = utf8_decode($htmlContent);
        $htmlContent = $this->replaceHttps($htmlContent, $baseurl);
        $pdfContent = $this->get('knp_snappy.pdf')->getOutputFromHtml($htmlContent, array(
            'load-error-handling' => 'ignore',
        ));
        return $pdfContent;
    }

    protected function replaceHttps($html, $baseurl)
    {
        if(preg_match_all('!https://[a-z0-9\-\.\/\?\=\&\#]+\.(?:jpe?g|png|gif|svg|eot|woff|ttf)!Ui', $html, $matches)){
            $matches = array_pop($matches);
            foreach($matches as $key => $url){
                $explode = explode('.',$url);
                $extension = end($explode);

                $source = $url;
                $target = $this->get('kernel')->getRootDir() . '/../web/tmp/file'.$key.'.'.$extension;
                $ch = curl_init($source);
                $fp = fopen($target, "wb");

                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);

                curl_exec($ch);
                curl_close($ch);
                fclose($fp);

                $html = str_replace($url, $baseurl.'/tmp/file'.$key.'.'.$extension, $html);
            }
        }

        return $html;
    }
}
