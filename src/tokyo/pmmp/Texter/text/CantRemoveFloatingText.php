<?php

/**
 * // English
 *
 * Texter, the display FloatingTextPerticle plugin for PocketMine-MP
 * Copyright (c) 2018 yuko fuyutsuki < https://github.com/fuyutsuki >
 *
 * This software is distributed under "MIT license".
 * You should have received a copy of the MIT license
 * along with this program.  If not, see
 * < https://opensource.org/licenses/mit-license >.
 *
 * ---------------------------------------------------------------------
 * // 日本語
 *
 * TexterはPocketMine-MP向けのFloatingTextPerticleを表示するプラグインです。
 * Copyright (c) 2018 yuko fuyutsuki < https://github.com/fuyutsuki >
 *
 * このソフトウェアは"MITライセンス"下で配布されています。
 * あなたはこのプログラムと共にMITライセンスのコピーを受け取ったはずです。
 * 受け取っていない場合、下記のURLからご覧ください。
 * < https://opensource.org/licenses/mit-license >
 */

namespace tokyo\pmmp\Texter\text;

// texter
use tokyo\pmmp\Texter\{
  manager\Manager
};

/**
 * CantRemoveFloatingTextClass
 */
class CantRemoveFloatingText extends Text {

  /**
   * @internal
   * @return array
   */
  public function format(): array {
    $levelName = strtolower($this->pos->getLevel()->getName());
    $data = [
      Manager::KEY_X_VEC => sprintf('%0.1f', $this->pos->x),
      Manager::KEY_Y_VEC => sprintf('%0.1f', $this->pos->y),
      Manager::KEY_Z_VEC => sprintf('%0.1f', $this->pos->z),
      Manager::KEY_TITLE => $this->title,
      Manager::KEY_TEXT => $this->text
    ];
    return $data;
  }
}
