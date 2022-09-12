<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * 警告タイプ
     *
     * @var string
     */
    public $type;

    /**
     * 警告メッセージセッション
     *
     * @var string
     */
    public $session;

    /**
     * コンポーネントインスタンスを作成
     *
     * @param  string  $type
     * @param  string  $session
     * @return void
     */
    public function __construct($type, $session)
    {
        $this->type = $type;
        $this->session = $session;
    }

    /**
     * コンポーネントを表すビュー／コンテンツを取得
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
