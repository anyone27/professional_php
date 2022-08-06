<?php declare(strict_types=1);

namespace professional_php\FrontPage\Presentation;

use Symfony\Component\HTTPFoundation\Request;
use Symfony\Component\HTTPFoundation\Response;

final class FrontPageController {
    public function show(Request $request) : Response {
        $content = "Hello, " . $request->get('name', 'visitor');
        return new Response($content);
    }
}