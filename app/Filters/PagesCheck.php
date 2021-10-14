<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class PagesCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = service('uri');
        if($uri->getSegment(1) == 'pages')
        {
            if($uri->getSegment(2) == '')
            {
                $seg = "/";
            }
            else
            {
                $seg = '/'.$uri->getSegment(2);
            }
            return redirect()->to($seg);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}