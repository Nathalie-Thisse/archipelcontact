<?php

namespace App\Controller;

use App\Entity\Tours;
use App\Repository\ToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SitemapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(Request $request, ToursRepository $toursRepository): Response
    {
        // Get host name from the URL:
        $hostname = $request->getSchemeAndHttpHost();

        // Initializing an array
        $urls = [];

        // add static urls inside the array
        $urls[] = ['loc' => $this->generateUrl('home')];
        $urls[] = ['loc' => $this->generateUrl('agency')];
        $urls[] = ['loc' => $this->generateUrl('contact')];
        $urls[] = ['loc' => $this->generateUrl('information')];
        $urls[] = ['loc' => $this->generateUrl('islands')];
        $urls[] = ['loc' => $this->generateUrl('bali')];
        $urls[] = ['loc' => $this->generateUrl('lombok')];
        $urls[] = ['loc' => $this->generateUrl('java')];
        $urls[] = ['loc' => $this->generateUrl('sumba')];
        $urls[] = ['loc' => $this->generateUrl('flores')];
        $urls[] = ['loc' => $this->generateUrl('kalimantan')];
        $urls[] = ['loc' => $this->generateUrl('sulawesi')];
        $urls[] = ['loc' => $this->generateUrl('tours')];

        // dd($urls);

        // add dynamic urls
        foreach ($toursRepository->findAll() as $tour) {
            $urls[] = [
                        'loc' => $this->generateUrl('show_tour', [
                            'id' => $tour->getId(),
                        ])
                    ];
        }
        
        // response in XML format
        $response = new Response(
            $this->renderView('sitemap/index.html.twig', [
                'urls' => $urls,
                'hostname' => $hostname
             ]),
            200
        );
        
        // add http header
        $response->headers->set('Content-Type', 'text/xml');

        // send the response
        return $response;
    }
}
