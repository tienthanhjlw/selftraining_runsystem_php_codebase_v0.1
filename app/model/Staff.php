<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class Staff
 */
class Staff extends Model
{
    /**
     * @var string
     */
    protected $table = 'staffs';
    protected $fillable = ['name'];

}
