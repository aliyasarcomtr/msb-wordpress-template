<?php
// 125x125 Logo Reklam Ekleme Şablonu
  add_action( 'admin_init', 'ads125' );
  function ads125() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( '125x125 Logo Reklam Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'reklam125' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Reklam Adresi', 'DA' ),
          'id'          => 'rek125link',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Reklam Resmi', 'DA' ),
          'id'          => 'rek125resim',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Reklam Alt & Title Yazısı', 'DA' ),
          'id'          => 'rek125alttitle',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// 90x90 Logo Reklam Ekleme Şablonu
  add_action( 'admin_init', 'ads90' );
  function ads90() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( '90x90 Logo Reklam Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'reklam90' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Reklam Adresi', 'DA' ),
          'id'          => 'rek90link',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Reklam Resmi', 'DA' ),
          'id'          => 'rek90resim',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Reklam Alt & Title Yazısı', 'DA' ),
          'id'          => 'rek90alttitle',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// Sosyal Hesap Ekleme Şablonu
  add_action( 'admin_init', 'sosyalhesap' );
  function sosyalhesap() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Sosyal Hesap Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'sosyallink' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Kullanıcı Linki', 'DA' ),
          'id'          => 'sosyallink',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Sosyal Ağ İkonu', 'DA' ),
          'id'          => 'sosyalicon',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Kullanıcı Adı', 'DA' ),
          'id'          => 'sosyalkadi',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// İletişim Bilgi Ekleme Şablonu
  add_action( 'admin_init', 'ilethesap' );
  function ilethesap() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Sosyal Hesap Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'iletisimbilgi' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'İkon', 'DA' ),
          'id'          => 'ileticon',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'İletişim Yazısı', 'DA' ),
          'id'          => 'iletyazi',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// Deneyim Ekleme Şablonu
  add_action( 'admin_init', 'deneyimbilgi' );
  function deneyimbilgi() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Deneyim Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'deneyim' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Pozisyon', 'DA' ),
          'id'          => 'deneyimpozisyon',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Şirket / Şehir / Tarih', 'DA' ),
          'id'          => 'deneyimtarih',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// Yetenek Ekleme Şablonu
  add_action( 'admin_init', 'yetenekbilgi' );
  function yetenekbilgi() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Yetenek Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'yetenek' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Sayı ( 0 - 100 )', 'DA' ),
          'id'          => 'yeteneksayi',
          'type'        => 'text',
        ),
        array(
          'label'       => __( 'Yetenek Adı', 'DA' ),
          'id'          => 'yetenekyazi',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// Eğitim Ekleme Şablonu
  add_action( 'admin_init', 'egitimbilgi' );
  function egitimbilgi() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Eğitim Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'egitim' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Tarih', 'DA' ),
          'id'          => 'egitimtarih',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }

// Proje Ekleme Şablonu
  add_action( 'admin_init', 'projebilgi' );
  function projebilgi() {
    $my_meta_box = array(
      'id'        => 'my_meta_box',
      'title'     => __( 'Proje Ekleme Alanı', 'DA' ),
      'desc'      => '',
      'pages'     => array( 'proje' ),
      'context'   => 'normal',
      'priority'  => 'high',
      'fields'    => array(
        array(
          'label'       => __( 'Proje Linki', 'DA' ),
          'id'          => 'projelink',
          'type'        => 'text',
        ),
      )
    );
    ot_register_meta_box( $my_meta_box );
  }
?>
