プロジェクトをアップデートする方法
==================================

このドキュメントでは、Symfony2 PRの特定のバージョンから1つ次のバージョンへアップデートする方法を説明します。
このドキュメントでは、フレームワークの "パブリックな" APIを使っている場合に必要な変更点についてのみ説明しています。
フレームワークのコアコードを "ハック" している場合は、変更履歴を注意深く追跡する必要があるでしょう。

beta4 から beta5
----------------

* ファイルアップロードのための一時的なストレージは削除されました

* `Symfony\Component\HttpFoundation\File\File::getExtension()` メソッドと `guessExtension()` メソッドは拡張子を
  返すときにもう `.` を付けません。

* Doctrine の `EntityType` クラスの `em` オプションは EntityManager インスタンスの代わりにエンティティ名を取ります。
  このオプションをを渡さない場合、以前と同じようにデフォルトのエンティティマネージャーが使われます。

* Console コンポーネントの中の: `Command::getFullname()` メソッドと `Command::getNamespace()` メソッドは削除されました
  (`Command::getName()` メソッドの振る舞いは以前の `Command::getFullname()` メソッドと同じになりました)。

* デフォルトの Twig フォームテンプレートは Twig bridge に移動されました。以下のようにすればテンプレートや
  コンフィギュレーション設定中で現在Twig フォームテンプレートを参照できます:

    変更前:

        `TwigBundle:Form:div_layout.html.twig`

    変更後:

        `div_layout.html.twig`

* キャッシュされているかを考慮する全ての設定は削除されました。

* `Response::isRedirected()` メソッドは `Response::isRedirect()` メソッドに統合されました。

beta3 から beta4
----------------

* `Profile` のインスタンスを返す `Client::getProfiler` は、 `Client::getProfile` が選ばれたため削除されました。

* いくつかの `UniversalClassLoader` のメソッド名は変更されました:

    * `registerPrefixFallback` から `registerPrefixFallbacks`
    * `registerNamespaceFallback` から `registerNamespaceFallbacks`

* イベントシステムはさらに柔軟になりました。リスナーは任意の有効でコール可能な PHP 関数であれば可能になりました。

    * `EventDispatcher::addListener($eventName, $listener, $priority = 0)`:
        * `$eventName` がイベント名で (もう配列ではいけません)、
        * `$listener` が コール可能な PHP 関数です。

    * イベントクラス名と定数が変更されました:

        * 以前の `Symfony\Component\Form\Events` のクラス名と定数:

                Events::preBind = 'preBind'
                Events::postBind = 'postBind'
                Events::preSetData = 'preSetData'
                Events::postSetData = 'postSetData'
                Events::onBindClientData = 'onBindClientData'
                Events::onBindNormData = 'onBindNormData'
                Events::onSetData = 'onSetData'

        * 新しい `Symfony\Component\Form\FormEvents` クラス名と定数:

                FormEvents::PRE_BIND = 'form.pre_bind'
                FormEvents::POST_BIND = 'form.post_bind'
                FormEvents::PRE_SET_DATA = 'form.pre_set_data'
                FormEvents::POST_SET_DATA = 'form.post_set_data'
                FormEvents::BIND_CLIENT_DATA = 'form.bind_client_data'
                FormEvents::BIND_NORM_DATA = 'form.bind_norm_data'
                FormEvents::SET_DATA = 'form.set_data'

        * 以前の `Symfony\Component\HttpKernel\Events` のクラス名と定数:

                Events::onCoreRequest = 'onCoreRequest'
                Events::onCoreException = 'onCoreException'
                Events::onCoreView = 'onCoreView'
                Events::onCoreController = 'onCoreController'
                Events::onCoreResponse = 'onCoreResponse'

        * 新しい `Symfony\Component\HttpKernel\CoreEvents` のクラス名と定数:

                CoreEvents::REQUEST = 'core.request'
                CoreEvents::EXCEPTION = 'core.exception'
                CoreEvents::VIEW = 'core.view'
                CoreEvents::CONTROLLER = 'core.controller'
                CoreEvents::RESPONSE = 'core.response'

        * 以前の `Symfony\Component\Security\Http\Events` のクラス名と定数:

                Events::onSecurityInteractiveLogin = 'onSecurityInteractiveLogin'
                Events::onSecuritySwitchUser = 'onSecuritySwitchUser'

        * 新しい `Symfony\Component\Security\Http\SecurityEvents` のクラス名と定数:

                SecurityEvents::INTERACTIVE_LOGIN = 'security.interactive_login'
                SecurityEvents::SWITCH_USER = 'security.switch_user'

    * `addListenerService` は第 1 引数として単一のイベント名だけを取るようになりました。

    * タグの中のコンフィギュレーションは呼び出すメソッドを設定が必須になりました:

        * 変更前:

                <tag name="kernel.listener" event="onCoreRequest" />

        * 変更後:

                <tag name="kernel.listener" event="core.request" method="onCoreRequest" />

    * Subscriber は常に連想配列を返すようになりました:

        * 変更前:

                public static function getSubscribedEvents()
                {
                    return Events::onBindNormData;
                }

        * 変更後:

                public static function getSubscribedEvents()
                {
                    return array(FormEvents::BIND_NORM_DATA => 'onBindNormData');
                }

* フォーム `DateType` パラメーターの `single-text` は `single_text` へ変更されました
* フォームフィールドラベルヘルパーは属性の設定も受け入れるようになりました。例 :

```html+jinja
{{ form_label(form.name, 'Custom label', { 'attr': {'class': 'name_field'} }) }}
```

* Swiftmailer を使うためには、autoloader ("app/autoloader.php") を通して "init.php" を登録し、
  `Swift_` prefix の登録を autoloader から削除しなければなりません。これをどのように行うべきかの例は、
  Standard Distribution をご覧ください。
  [autoload.php](https://github.com/symfony/symfony-standard/blob/v2.0.0BETA4/app/autoload.php#L29).

beta2 から beta3
----------------

* `framework.annotations` に属する設定が少し変更されました。

    変更前:

        framework:
            annotations:
                cache: file
                file_cache:
                    debug: true
                    dir: /foo

    変更後:

        framework:
            annotations:
                cache: file
                debug: true
                file_cache_dir: /foo

beta1 から beta2
----------------

* アノテーションのパース処理が変更され、Doctrine Common 3.0 を利用するようになりました。
  クラス内で使うアノテーションは、インポートする必要があります（`use` で PHP の名前空間をインポートするのと同様です）。

  変更前:

``` php
<?php

/**
 * @orm:Entity
 */
class AcmeUser
{
    /**
     * @orm:Id
     * @orm:GeneratedValue(strategy = "AUTO")
     * @orm:Column(type="integer")
     * @var integer
     */
    private $id;

    /**
     * @orm:Column(type="string", nullable=false)
     * @assert:NotBlank
     * @var string
     */
    private $name;
}
```
  変更後:

``` php
<?php

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class AcmeUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     *
     * @var string
     */
    private $name;
}
```

* `Set` 制約の記述が変更され、必要なくなったため削除されました。

変更前:

``` php
<?php

/**
 * @orm:Entity
 */
class AcmeEntity
{
    /**
     * @assert:Set({@assert:Callback(...), @assert:Callback(...)})
     */
    private $foo;
}
```
変更後:

``` php
<?php

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Callback;

/**
 * @ORM\Entity
 */
class AcmeEntity
{
    /**
     * @Callback(...)
     * @Callback(...)
     */
    private $foo;
}
```

* `framework.validation.annotations` に属するコンフィギュレーションは削除され、`framework.validation.enable_annotations` の真偽値に置き換えられました（デフォルトでは `false` です）。

* フォームを使う場合は、明示的に有効化するよう変更されました（Symfony Standard Edition のコンフィギュレーションではデフォルトで有効に設定されています）。

        framework:
            form: ~

    これは、次のように記述しても同じです。

        framework:
            form:
                enabled: true

* Routing コンポーネントの例外を移動しました。

    変更前:

        Symfony\Component\Routing\Matcher\Exception\Exception
        Symfony\Component\Routing\Matcher\Exception\NotFoundException
        Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException

    変更後:

        Symfony\Component\Routing\Exception\Exception
        Symfony\Component\Routing\Exception\NotFoundException
        Symfony\Component\Routing\Exception\MethodNotAllowedException

* Form コンポーネントの `csrf_page_id` オプションの名前は、`intention` に変更されました。

* `error_handler` の設定が削除されました。`ErrorHandler` クラスは Symfony Standard Edition の `AppKernel` で直接管理されるように変更されました。

* Doctrine のメタデータ用のディレクトリが、`Resources/config/doctrine/metadata/orm/` から `Resources/config/doctrine` に変更され、各ファイルの拡張子が `.dcm.yml` から ``.orm.yml`` に変更されました。
  また、ファイル名は短いクラス名のみに変更されました。

    変更前:

        Resources/config/doctrine/metadata/orm/Bundle.Entity.dcm.xml
        Resources/config/doctrine/metadata/orm/Bundle.Entity.dcm.yml

    変更後:

        Resources/config/doctrine/Entity.orm.xml
        Resources/config/doctrine/Entity.orm.yml

* 新しい Doctrine Registry クラスの導入により、次のパラメータは削除されました（`doctrine` サービスのメソッドに置き換えられました）。

   * `doctrine.orm.entity_managers`
   * `doctrine.orm.default_entity_manager`
   * `doctrine.dbal.default_connection`

    変更前:

        $container->getParameter('doctrine.orm.entity_managers')
        $container->getParameter('doctrine.orm.default_entity_manager')
        $container->getParameter('doctrine.orm.default_connection')

    変更後:

        $container->get('doctrine')->getEntityManagerNames()
        $container->get('doctrine')->getDefaultEntityManagerName()
        $container->get('doctrine')->getDefaultConnectionName()

    ただし、これらのメソッドを使わなくても、次のようにして Registry オブジェクトから直接 EntityManager オブジェクトを取得できます。

    変更前:

        $em = $this->get('doctrine.orm.entity_manager');
        $em = $this->get('doctrine.orm.foobar_entity_manager');

    変更後:

        $em = $this->get('doctrine')->getEntityManager();
        $em = $this->get('doctrine')->getEntityManager('foobar');

* `doctrine:generate:entities` コマンドの引数とオプションが変更されました。
  新しい引数とオプションの詳細は、`./app/console doctrine:generate:entities --help` コマンドを実行して確認してください。

* `doctrine:generate:repositories` コマンドは削除されました。
  このコマンドに相当する機能は、`doctrine:generate:entities` コマンドに統合されました。

* Doctrine イベントサブスクライバーは、ユニークな `doctrine.event_subscriber` タグを使うように変更されました。
  また、Doctrine イベントリスナーは、ユニークな `doctrine.event_listener` タグを使うように変更されました。
  コネクションを指定するには、オプションの `connection` 属性を使ってください。

    変更前:

        listener:
            class: MyEventListener
            tags:
                - { name: doctrine.common.event_listener, event: name }
                - { name: doctrine.dbal.default_event_listener, event: name }
        subscriber:
            class: MyEventSubscriber
            tags:
                - { name: doctrine.common.event_subscriber }
                - { name: doctrine.dbal.default_event_subscriber }

    変更後:

        listener:
            class: MyEventListener
            tags:
                - { name: doctrine.event_listener, event: name }                      # すべてのコネクションに対して登録
                - { name: doctrine.event_listener, event: name, connection: default } # デフォルトコネクションにのみ登録
        subscriber:
            class: MyEventSubscriber
            tags:
                - { name: doctrine.event_subscriber }                      # すべてのコネクションに対して登録
                - { name: doctrine.event_subscriber, connection: default } # デフォルトコネクションにのみ登録

* アプリケーションの翻訳ファイルは、`Resources` ディレクトリに保存されるように変更されました。

    変更前:

        app/translations/catalogue.fr.xml

    変更後:

        app/Resources/translations/catalogue.fr.xml

* `collection` フォームタイプの `modifiable` オプションは、2 つのオプション "allow_add" と "allow_delete" に分割されました。

    変更前:

        $builder->add('tags', 'collection', array(
            'type' => 'text',
            'modifiable' => true,
        ));

    変更後:

        $builder->add('tags', 'collection', array(
            'type' => 'text',
            'allow_add' => true,
            'allow_delete' => true,
        ));

* `Request::hasSession()` メソッドの名前は `Request::hasPreviousSession()` に変更されました。`hasSession()` メソッドはまだ存在しますが、
  セッションが以前のリクエストから開始されたかどうかではなく、リクエストがセッションオブジェクトを含んでいるかチェックするのみです。

* Serializer: NormalizerInterface の `supports()` メソッドは `supportsNormalization()` と `supportsDenormalization()` の 2 つのメソッドに分割されました。

* `ParameterBag::getDeep()` メソッドは削除され、`ParameterBag::get()` メソッドの真偽値の引数に置き換えられました。

* Serializer: `AbstractEncoder` と `AbstractNormalizer` はそれぞれ `SerializerAwareEncoder` と `SerializerAwareNormalizer` に名前が変更されました。

* Serializer: すべてのインターフェイスから `$properties` という引数が除かれました。

* Form: オプションの値である "date" タイプの "widget" の "text" は "single-text" に名前が変更されました。
  "text" は現在は個々のテキストボックスを示します ("time" タイプのように) 。

* Form: ビュー変数 `name` が `full_name` に変更されました。`name` 変数には `$form->getName()` と同じ値である、ローカルの短い名前が格納されるようになりました。

PR12 から beta1
---------------

* CSRF シークレットの設定は、`secret` という必須のグローバル設定に変更されました（また、このシークレット値は CSRF 以外でも利用されます）

    変更前:

        framework:
            csrf_protection:
                secret: S3cr3t

    変更後:

        framework:
            secret: S3cr3t

* `File::getWebPath()` メソッドと `File::rename()` メソッドは削除されました。同様に `framework.document_root` コンフィギュレーションも削除されました。

* `File::getDefaultExtension()` メソッドの名前は `File::guessExtension()` に変更されました。
  また、拡張子を推測できなかった場合は null を返すように変更されました。

* `session` のコンフィギュレーションがリファクタリングされました

  * `class` オプションが削除されました（代わりに `session.class` パラメータを使ってください）

  * PDO セッションストレージのコンフィギュレーションが削除されました（クックブックのレシピは修正中です）

  * `storage_id` オプションには、サービスIDの一部ではなく、サービスIDそのものを指定するように変更されました。

* `DoctrineMigrationsBundle` と `DoctrineFixturesBundle` の 2 つのバンドルは、Symfony コアから独立し、個別のリポジトリで管理されるようになりました。

* フォームフレームワークの大きなリファクタリングが行われました（詳細はドキュメントを参照してください）

* `trans` タグで、翻訳するメッセージを引数として受け取る形式が廃止されました:

        {% trans "foo" %}
        {% trans foo %}

    次のような長い形式か、フィルタ形式を使ってください:

        {% trans %}foo{% endtrans %}
        {{ foo|trans }}

    こうすることで、タグとフィルタの使用方法が明確になり、自動出力エスケープのルールが適用された場合により分かりやすくなります（詳細はドキュメントを参照してください）。

* DependencyInjection コンポーネントの `ContainerBuilder` クラスと `Definition` クラスのいくつかのメソッドの名前が、より分かりやすく一貫性のある名前に変更されました:

    変更前:

        $container->remove('my_definition');
        $definition->setArgument(0, 'foo');

    変更後:

        $container->removeDefinition('my_definition');
        $definition->replaceArgument(0, 'foo');

* rememberme のコンフィギュレーションで、`token_provider key` サービスIDのサフィックスを指定するのではなく、サービスIDそのものを指定するように変更されました。

PR11 から PR12
--------------

* HttpFoundation\Cookie::getExpire() は getExpiresTime() に名前が変更されました。

* XMLのコンフィギュレーションの記述方法が変更されました。属性が1つしかないタグは、すべてタグのコンテンツとして記述するように変更されました。

  変更前:

        <bundle name="MyBundle" />
        <app:engine id="twig" />
        <twig:extension id="twig.extension.debug" />

  変更後:

        <bundle>MyBundle</bundle>
        <app:engine>twig</app:engine>
        <twig:extension>twig.extension.debug</twig:extension>

* SwitchUserListenerが有効な場合に、すべてのユーザーが任意のアカウントになりすませる致命的な脆弱性を修正しました。SwitchUserListenerを利用しない設定にしている場合は影響はありません。

* DIコンテナのコンパイルプロセスの最後に、すべてのサービスに対する参照のバリデーションがより厳密に行われるようになりました。これにより、無効なサービス参照が見つかった場合は、コンパイル時の例外が発生します（以前の動作は、実行時例外でした）。

PR10 から PR11
--------------

* エクステンションのコンフィギュレーションクラスには、`Symfony\Component\Config\Definition\ConfigurationInterface` インターフェイスを実装する必要があります。この部分の後方互換性は維持されていますが、今後の開発のために、エクステンションにこのインターフェイスを実装しておいてください。

* Monologのオプション `fingerscrossed` は `fingers_crossed` に名前が変更されました。

PR9 から PR10
-------------

* バンドルの論理名には、再び `Bundle` サフィックスを付けるように修正されました:

    *コントローラ*: `Blog:Post:show` -> `BlogBundle:Post:show`

    *テンプレート*: `Blog:Post:show.html.twig` -> `BlogBundle:Post:show.html.twig`

    *リソース*:     `@Blog/Resources/config/blog.xml` -> `@BlogBundle/Resources/config/blog.xml`

    *Doctrine*:     `$em->find('Blog:Post', $id)` -> `$em->find('BlogBundle:Post', $id)`

* `ZendBundle` は `MonologBundle` に置き換えられました。
  これに関するプロジェクトのアップデート方法は、Symfony Standard Edition の変更点を参考にしてください:
  https://github.com/symfony/symfony-standard/pull/30/files

* コアバンドルのパラメータは、ほぼすべて削除されました。
  代わりにバンドルのエクステンションの設定で公開されている設定を使うようにしてください。

* 一貫性のために、いくつかのコアバンドルのサービス名が変更されました。

* バリデータの名前空間が `validation` から `assert` へ変更されました（PR9向けにアナウンスされていましたが、PR10での変更となりました）:

    変更前:

        @validation:NotNull

    変更後:

        @assert:NotNull

    さらに、いくつかの制約で使われていた `Assert` プレフィックスは削除されました(`AssertTrue` から `True` へ変更)

* `ApplicationTester::getDisplay()` と `CommandTester::getDisplay()` メソッドは、コマンドの終了コードを返すようになりました


PR8 から PR9
------------

* `Symfony\Bundle\FrameworkBundle\Util\Filesystem` は、`Symfony\Component\HttpKernel\Util\Filesystem` へ移動されました

* `Execute` 制約は、`Callback` 制約に名前が変更されました

* HTTPの例外クラスのシグニチャが変更されました:

    変更前:

        throw new NotFoundHttpException('Not Found', $message, 0, $e);

    変更後:

        throw new NotFoundHttpException($message, $e);

* RequestMatcher クラスでは、正規表現に `^` と `$` が自動的には追加されなくなりました

    この変更によって、セキュリティの設定をたとえば次のように変更する必要があります:

    変更前:

        pattern:  /_profiler.*
        pattern:  /login

    変更後:

        pattern:  ^/_profiler
        pattern:  ^/login$

* `app/` ディレクトリ以下のグローバルテンプレートの位置が変更されました(古いディレクトリでは動作しなくなります):

    変更前:

        app/views/base.html.twig
        app/views/AcmeDemoBundle/base.html.twig

    変更後:

        app/Resources/views/base.html.twig
        app/Resources/AcmeDemo/views/base.html.twig

* バンドルの論理名に、`Bundle` サフィックスをつける必要がなくなりました:

    *コントローラ*: `BlogBundle:Post:show` -> `Blog:Post:show`

    *テンプレート*: `BlogBundle:Post:show.html.twig` -> `Blog:Post:show.html.twig`

    *リソース*:     `@BlogBundle/Resources/config/blog.xml` -> `@Blog/Resources/config/blog.xml`

    *Doctrine*:    `$em->find('BlogBundle:Post', $id)` -> `$em->find('Blog:Post', $id)`

* Asseticのフィルターは明示的にロードする必要があります:

        assetic:
            filters:
                cssrewrite: ~
                yui_css:
                    jar:      "/path/to/yuicompressor.jar"
                my_filter:
                    resource: "%kernel.root_dir%/config/my_filter.xml"
                    foo:      bar
