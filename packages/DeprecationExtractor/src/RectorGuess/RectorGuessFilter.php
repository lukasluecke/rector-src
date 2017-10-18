<?php declare(strict_types=1);

namespace Rector\DeprecationExtractor\RectorGuess;

final class RectorGuessFilter
{
    /**
     * @param RectorGuess[] $rectorGuesses
     * @return RectorGuess[]
     */
    public function filterRectorGuessesToShow(array $rectorGuesses): array
    {
        return $this->filterOutUsefulrectorGuesses($rectorGuesses);
    }

    /**
     * @param RectorGuess[] $rectorGuesses
     * @return RectorGuess[]
     */
    private function filterOutUsefulrectorGuesses(array $rectorGuesses): array
    {
        return array_filter($rectorGuesses, function (RectorGuess $rectorGuess) {
            return $rectorGuess->isUseful();
        });
    }
}
