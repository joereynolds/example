<?php

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;
use App\Service\UserService;

class HomePageHandler implements RequestHandlerInterface
{
    /**
     * @var TemplateRendererInterface
     */
    public $template;

    /**
     * @var UserService
     */
    public $userService;

    public function __construct(
        TemplateRendererInterface $template
    ) {
        $this->template = $template;
        $this->userService = new UserService();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface 
    {
        $profiles = $this->userService->get();
        return new HtmlResponse($this->template->render('app::home-page', $profiles));
    }
}
