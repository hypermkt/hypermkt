## 人生から学ぶGitとGitHub

### 講義
* この資料はGitとGitHub未経験者が、これらツールの概念を学ぶための資料です
* 今まで覚えたGit, GitHubの知識は忘れてください。あなたの人生の話をしましょう。
	* あなたはいつ生まれましたか？
	* あなたは中学校で何の部活に入りましたか？
	* あなたの人生の節目はなんですか？その選択肢は何ですか？
* あなたの人生には、いろいろな出来事があったでしょう。進学、就職、出会い。
* そして人生の分かれ道。
* もしあの時に正しい選択をしていれば、と思ったことありませんか？
* もし失敗することがわかっていれば、やり直したいと思ったことはありませんか？
* そんなあなたの人生を正しく導くことができるのが、GitとGitHubです。
	* Gitは、あなたの人生をやり直すことが出来る魔法の道具です。
  * GitHubは、あなたの人生をやり直す申請を受け付ける場所です。
* 登場人物
  * リポジトリ: あなた
  * コミット: 人生の出来事
  * ブランチ: もう一つの仮の人生、世界線
  * チェックアウト: 人生の切り替え
  * masterブランチ: 本当の人生
  * プルリクエスト: 仮の人生を経験するための申請、もしもボックス
  * マージ: 本物の人生に適用
* リポジトリとはあなたです。これからあなたの人生の話をしましょう。
  * あなたが生まれる
  * あなたが中学校に入学する
* この一つ一つの出来事をコミットと呼びます。あなたの人生には、いろいろなコミットがあったことでしょう。
* このコミットを結んだあなたの人生をmasterブランチと言います。
* 人生の分かれ道就職です。エンジニアになる、又はデザイナーになるという選択肢がありました。どちらが将来成功するか分かりません。
* ここで２つの人生を試して、幸せになれる将来を確認してから選択するようにしましょう。
	* エンジニアになる仮の人生
	* デザイナーになる仮の人生
	* 仮の人生をブランチと言います
* 仮の人生を作ったら、GitHubに仮の人生をする申請をしましょう。
* ２つの仮の人生は、好きな時に好きなだけ進めて良いです。
	* エンジニアになる人生の結末：起業するも借金抱えて倒産・・・
	* デザイナーになる人生の結末：ペパボに就職してシニアデザイナに。
* デザイナーになる人生は、成功することが分かったので、あなたの本当の人生（masterブランチ)に適用（マージ）しましょう。
* GitとGitHubは、幸せな人生を送るための道具です。正しく使って悔いの無い人生にしましょう。
* 以上

### ハンズオン

#### 初期設定
名前、メールアドレスを設定する
```sh
git config --global user.name "YOUR NAME"
git config --global user.email "YOUR EMAIL ADDRESS"
```

設定内容を確認する
```sh
git config --list
```

#### コマンド
```sh
* 変更されたファイルの一覧を表示したい git status
* 変更されたファイルの差分を知りたい git diff
* ファイルやディレクトリをインデックスに登録したい git add <filename or directory name>
* インデックスに追加されたファイルをコミットしたい git commit
* コミットのログを見たい git log
* ブランチを作成する git branch ブランチ名
* ブランチを削除する git branch -D ブランチ名
* ブランチ一覧を表示する git branch
* ブランチを切り替える git checkout ブランチ名
* プッシュする git push origin ブランチ名
```