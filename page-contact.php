<!-- 
    Template Name: コンタクトページ
-->

<?php get_header(); ?>

<main class="l_contents contact">
    <h2 class="title">CONTACT</h2>
    <form action="" class="contact-form">
    <dl class="form-body">
        <div class="form-unit">
        <dt class="form-unit-head">お名前</dt>
        <dd class="form-unit-contents">
            <input type="text" placeholder="山田 太郎" class="form-input" />
        </dd>
        </div>

        <div class="form-unit">
        <dt class="form-unit-head">メールアドレス</dt>
        <dd class="form-unit-contents">
            <input
            type="email"
            placeholder="create@example.com"
            class="form-input"
            />
        </dd>
        </div>
        <!-- /.form-unit -->
        <div class="form-unit">
        <dt class="form-unit-head">電話番号</dt>
        <dd class="form-unit-contents">
            <input
            type="text"
            placeholder="080-0000-0000"
            class="form-input"
            />
        </dd>
        </div>
        <!-- /.form-unit -->
        

        <div class="form-unit">
        <dt class="form-unit-head">お問い合わせ内容</dt>
        <dd class="form-unit-contents">
            <textarea rows="6" class="form-textarea"></textarea>
        </dd>
        </div>
        <!-- /.form-unit -->
    </dl>

    <input type="submit" class="form-submit" value="送信" />
    </form>
</main>

<?php get_footer(); ?>