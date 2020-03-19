<?php
namespace FishpondServices\:service_namespace\DisplayData\Value\Polyfill;


use Gamesmkt\FishpondRecord\DisplayDataInterface;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Carbon\Carbon;

trait MultilingualTrait
{
    protected $trans;

    public function translatorLoad(DisplayDataInterface $displayData)
    {
        $loader = new FileLoader(new Filesystem(), dirname(__DIR__) . '/lang');

        $this->trans = new Translator($loader, $displayData->trans->getlocale());
    }


}
