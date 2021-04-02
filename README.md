<!-- <p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

# サイクリングスポット情報共有サービス CYCLINGSPOT-SEARCHについて

<img width="618" alt="ログイン画面" src="https://user-images.githubusercontent.com/63571051/112464275-a2c77400-8da6-11eb-8d0d-9cd555ba093b.png">

有益なサイクリングスポットを共有し合うことにより、地域ごとの魅力を発掘することを目的としたサービスです。
<!-- Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as: -->

## URL
URL: [https://www.cyclingspot-search.com](https://www.cyclingspot-search.com)

ゲストとしてログインできます。
<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting). -->
トップページのログインボタンからログインページに遷移していただき、「ゲストログインボタン」からゲストユーザーとしてログインしアプリをご使用いただけます。
<br>



<!-- Laravel is accessible, yet powerful, providing tools needed for large, robust applications. -->

## アプリ作成の目的

<!-- Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library. -->
私は趣味でサイクリングをしております。新型コロナウイルスの感染拡大を受け、「三密」を避ける手段として自転車通勤を始める人やサイクリングを新たに始める人が増えています。そこで少しでもサイクリングの楽しさを共有できればと思い本サービスを作成しました。
<!-- ## 工夫した点
・無限コメント機能
・CI/CDパイプラインの構築 -->


## 機能一覧
### ユーザー機能
- ユーザー登録・編集・削除
- 一覧表示
- ゲストログイン
- プロフィール画像の登録・編集
- マイページにて以下の投稿の一覧表示
    - 全ての自分の投稿
    - フォローしたユーザー
    - フォロワー
    - お気に入りに追加した投稿
### 投稿機能
- 投稿（画像, タイトル, メッセージ, 都道府県・市区町村, 場所, 位置情報）・編集・削除
- 一覧表示、詳細表示
- 地図表示（Google Maps API）
- お気に入り追加（いいね数のカウント, 非同期）
- 検索（キーワード検索・メニュー検索）
- 場所一覧
### コメント機能
- 投稿（コメント対しコメントが延々とできる, 非同期）
- コメントの表示（同一スレッド上にある直前・直後のコメントを表示可能, 非同期）
- 削除(非同期)
### フォロー機能
- ユーザーのフォロー・フォロー解除（非同期）
- フォロー中のユーザーとフォロワーの一覧表示
### その他
- レスポンシブ対応
- テスト

<!-- ## Laravel Sponsors -->
## 使用技術
### フロント
- HTML
- CSS
- JavaScript
- jQuery(Ajax)
- bootstrap
### バックエンド
- PHP  7.3.27
- Laravel 6.20.19

### DB
- MySQL 5.7.33
### インフラ・開発環境等
- AWS(EC2,VPC,S3)

### その他
- Google API

### アピールポイント
- フォロー機能
- ゲストユーザーとしてログインできる
- エラーメッセージの日本語化
- 地図表示

### 投稿一覧
<img width="618" alt="投稿一覧" src="https://user-images.githubusercontent.com/63571051/112465591-3f3e4600-8da8-11eb-9bf7-87e92fb4f6ac.png">


### 地図一覧
<img width="618" alt="地図表示" src="https://user-images.githubusercontent.com/63571051/112466300-0d79af00-8da9-11eb-8e4f-402ce0382dd4.png">

<!-- We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell): -->

<!-- - **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/) -->



<!-- ## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
