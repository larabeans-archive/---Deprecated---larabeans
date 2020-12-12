<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Object_;


class CreateCountryTask extends Task
{
    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
      int $id,
      string $name,
      string $alpha2,
      string $alpha3,
      string $isd,
      string $capital,
      string $currency,
      string $native,
      string $continent,
      string $subcontinent,
      string $emoji,
      string $emojiUnicode
    )
    {
        try {
            $this->repository->create([
                "id"           =>    $id,
                "name"         =>    $name,
                "alpha2"       =>    $alpha2,
                "alpha3"       =>    $alpha3,
                "isd"          =>    $isd,
                "capital"      =>    $capital,
                "currency"     =>    $currency,
                "native"       =>    $native,
                "continent"    =>    $continent,
                "subcontinent" =>    $subcontinent,
                "emoji"        =>    $emoji,
                "emoji_unicode"=>    $emojiUnicode
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
