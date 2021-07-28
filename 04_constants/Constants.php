<?php


class Constants{

  // Константы принято обозначать заглавными буквами
  // Могут содержать только значения простого типа (не объект)

  // По умолчанию константы, как и переменные - public
  const           PI     = 3.14;

  public const    PUB_C  = 1;

  // При вызове статически (напр, Constants::PROT_C) вызовут fatal error
  protected const PROT_C = 2;
  private const   PRIV_C = 3;

}
