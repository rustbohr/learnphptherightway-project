<?php

function formatDollarAmount(float $amount): string
{
    return ($amount < 0 ? '-' : '').'$'.number_format(abs($amount), 2);
}

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}