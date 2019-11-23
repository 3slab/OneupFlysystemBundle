<?php

namespace Oneup\FlysystemBundle\Tests\App;

use Oneup\FlysystemBundle\OneupFlysystemBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new FrameworkBundle(),

            // Test this Bundle
            new OneupFlysystemBundle(),
        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/App/var/'.$this->environment.'/cache';
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/App/var/'.$this->environment.'/log';
    }
}
