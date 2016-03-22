<?php
/**
 * Created by PhpStorm.
 * User: PHAN
 * Date: 22/03/2016
 * Time: 21:33
 */

namespace AppBundle\Services;


use Symfony\Component\HttpKernel\Log\LoggerInterface;

class QuoteGenerator
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * QuoteGenerator constructor.
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomQuote()
    {
        $quotes = array(
          "quote 1",
          "quote 2",
          "quote 3",
          "quote 4",
        );
        $key = array_rand($quotes);
        $quote = $quotes[$key];
        $this->logger->info('selected quote: '.$quote);
        return $quote;
    }
}