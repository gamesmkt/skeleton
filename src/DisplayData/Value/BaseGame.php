<?php

namespace FishpondServices\:service_namespace\DisplayData\Value;


use Gamesmkt\FishpondRecord\DisplayData;
use Gamesmkt\FishpondRecord\DisplayDataDecorator;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;

abstract class BaseGame extends DisplayDataDecorator
{
    protected $sourceBetRecord;

    protected $trans;

    public function __construct(DisplayData $displayData)
    {
        parent::__construct($displayData);

        $this->sourceBetRecord = $this->betRecord->source;
        $loader = new FileLoader(new Filesystem(), __DIR__ . '/lang');

        $this->trans = new Translator($loader, $displayData->trans->getLocale());
    }

}
