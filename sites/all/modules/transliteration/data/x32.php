<?php

// $Id: x32.php,v 1.3 2009/06/09 19:07:06 smk Exp $

$base = [
  0x00 => '(g)', '(n)', '(d)', '(r)', '(m)', '(b)', '(s)', '()', '(j)', '(c)', '(k)', '(t)', '(p)', '(h)', '(ga)', '(na)',
  0x10 => '(da)', '(ra)', '(ma)', '(ba)', '(sa)', '(a)', '(ja)', '(ca)', '(ka)', '(ta)', '(pa)', '(ha)', '(ju)', null, null, null,
  0x20 => '(1) ', '(2) ', '(3) ', '(4) ', '(5) ', '(6) ', '(7) ', '(8) ', '(9) ', '(10) ', '(Yue) ', '(Huo) ', '(Shui) ', '(Mu) ', '(Jin) ', '(Tu) ',
  0x30 => '(Ri) ', '(Zhu) ', '(You) ', '(She) ', '(Ming) ', '(Te) ', '(Cai) ', '(Zhu) ', '(Lao) ', '(Dai) ', '(Hu) ', '(Xue) ', '(Jian) ', '(Qi) ', '(Zi) ', '(Xie) ',
  0x40 => '(Ji) ', '(Xiu) ', '<<', '>>', null, null, null, null, null, null, null, null, null, null, null, null,
  0x50 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
  0x60 => '(g)', '(n)', '(d)', '(r)', '(m)', '(b)', '(s)', '()', '(j)', '(c)', '(k)', '(t)', '(p)', '(h)', '(ga)', '(na)',
  0x70 => '(da)', '(ra)', '(ma)', '(ba)', '(sa)', '(a)', '(ja)', '(ca)', '(ka)', '(ta)', '(pa)', '(ha)', null, null, null, 'KIS ',
  0x80 => '(1) ', '(2) ', '(3) ', '(4) ', '(5) ', '(6) ', '(7) ', '(8) ', '(9) ', '(10) ', '(Yue) ', '(Huo) ', '(Shui) ', '(Mu) ', '(Jin) ', '(Tu) ',
  0x90 => '(Ri) ', '(Zhu) ', '(You) ', '(She) ', '(Ming) ', '(Te) ', '(Cai) ', '(Zhu) ', '(Lao) ', '(Mi) ', '(Nan) ', '(Nu) ', '(Shi) ', '(You) ', '(Yin) ', '(Zhu) ',
  0xA0 => '(Xiang) ', '(Xiu) ', '(Xie) ', '(Zheng) ', '(Shang) ', '(Zhong) ', '(Xia) ', '(Zuo) ', '(You) ', '(Yi) ', '(Zong) ', '(Xue) ', '(Jian) ', '(Qi) ', '(Zi) ', '(Xie) ',
  0xB0 => '(Ye) ', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
  0xC0 => '1M', '2M', '3M', '4M', '5M', '6M', '7M', '8M', '9M', '10M', '11M', '12M', null, null, null, null,
  0xD0 => 'a', 'i', 'u', 'u', 'o', 'ka', 'ki', 'ku', 'ke', 'ko', 'sa', 'si', 'su', 'se', 'so', 'ta',
  0xE0 => 'ti', 'tu', 'te', 'to', 'na', 'ni', 'nu', 'ne', 'no', 'ha', 'hi', 'hu', 'he', 'ho', 'ma', 'mi',
  0xF0 => 'mu', 'me', 'mo', 'ya', 'yu', 'yo', 'ra', 'ri', 'ru', 're', 'ro', 'wa', 'wi', 'we', 'wo', null,
];
