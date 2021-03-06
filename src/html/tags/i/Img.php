<?hh // strict
/*
 *  Copyright (c) 2015, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class :img extends :xhp:html-singleton {
  attribute
    string alt, enum {'anonymous', 'use-credentials'} crossorigin, int height,
    bool ismap, string src, string usemap, int width;
  category %flow, %phrase;
  protected string $tagName = 'img';
}
