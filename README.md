# gitエイリアス設定

<br>
<br>
<br>

<hr>

## 例)<br>
コミットをしたい時<br>
`git cm 'コミットコメント'`<br>
このように`cm`の中に`commit -m`が入っているため<br>打つコマンドを減らせる！！

###

<hr>

<br>
<br>
<br>

## エイリアスコマンド一覧

- コミット

`commit -m` → `cm`

<br>
<br>

- プッシュ

`push origin` → `pso`

<br>
<br>

- 強制プッシュ

`push -f origin` → `psfo`

<br>
<br>

- masterからプル

`pull origin master` → `ploms`

<br>
<br>

- mainからプル

`pull origin main` → `ploma`

<br>
<br>

- リセット

`reset --soft HEAD^` → `re`

<br>
<br>


- チェックアウト

`checkout` → `co`

<br>
<br>


- 生成からのチェックアウト

`checkout -b` → `cob`

<br>
<br>


## 設定コマンド一覧

git config --global alias.cob 'checkout -b'<br>
git config --global alias.co 'checkout'<br>
git config --global alias.re 'reset --soft HEAD^'<br>
git config --global alias.ploms 'pull origin master'<br>
git config --global alias.ploma 'pull origin main'<br>
git config --global alias.psfo 'push -f origin'<br>
git config --global alias.pso 'push origin'<br>
git config --global alias.cm 'commit -m'<br>

テスト追加

テスト追加したよ