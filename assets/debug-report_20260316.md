# デバッグレポート

**作成日**: 2026年3月16日
**対象**: shinshinren プロジェクト

---

## 修正一覧

### 1. `service.html` — HTMLタグ破損（致命的）

**問題**: 閉じタグの `<` が欠落しており、以降のHTMLレンダリングが崩れていた。

```html
<!-- 修正前 -->
<p>077-569-0351/p>

<!-- 修正後 -->
<p>077-569-0351</p>
```

---

### 2. `service.html` — 画像パスに拡張子なし

**問題**: `service-image-5` に `.jpg` 拡張子がなく画像が表示されなかった。

```html
<!-- 修正前 -->
<img class="service-image" src="./assets/images/service-image-5" alt="職員">

<!-- 修正後 -->
<img class="service-image" src="./assets/images/service-image-5.jpg" alt="職員">
```

---

### 3. `service.html` — スペルミス

**問題**: 英語スパンテキストに余分な `L` が混入していた。

```html
<!-- 修正前 -->
<span>PLLANNING CONSULTATION</span>

<!-- 修正後 -->
<span>PLANNING CONSULTATION</span>
```

---

### 4. `index.php` — 画像パスに拡張子なし（5箇所）

**問題**: service-image-1〜5 すべてに `.jpg` 拡張子がなく画像が表示されなかった。

```html
<!-- 修正前 -->
src="./assets/images/service-image-1"
src="./assets/images/service-image-2"
src="./assets/images/service-image-3"
src="./assets/images/service-image-4"
src="./assets/images/service-image-5"

<!-- 修正後 -->
src="./assets/images/service-image-1.jpg"
src="./assets/images/service-image-2.jpg"
src="./assets/images/service-image-3.jpg"
src="./assets/images/service-image-4.jpg"
src="./assets/images/service-image-5.jpg"
```

---

### 5. `index.php` — 誤字

**問題**: ロコロコの説明文で「します」の「す」が欠落していた。

```html
<!-- 修正前 -->
サービスをお届けしま。

<!-- 修正後 -->
サービスをお届けします。
```

---

### 6. `about.html` — フッターのリンク空白

**問題**: フッターの「草津市いきいきふれあい大運動会」のリンクが `href=""` になっており、他ページと不一致だった。

```html
<!-- 修正前 -->
<a href="">草津市いきいきふれあい大運動会<br>草津市障害者孤立化防止事業</a>

<!-- 修正後 -->
<a href="./support/community-support.html">草津市いきいきふれあい大運動会<br>草津市障害者孤立化防止事業</a>
```

---

### 7. `contact.php` — SPナビのリンクがすべて `#`

**問題**: ハンバーガーメニュー内のナビリンクが「法人について」「事業内容」「採用情報」「お知らせ」すべて `href="#"` になっており機能しなかった。

```html
<!-- 修正前 -->
<li><a href="#" class="nav-grid__link">法人について</a></li>
<li><a href="#" class="nav-grid__link">事業内容</a></li>
<li><a href="#" class="nav-grid__link">採用情報</a></li>
<li><a href="#" class="nav-grid__link">お知らせ</a></li>

<!-- 修正後 -->
<li><a href="./about.html" class="nav-grid__link">法人について</a></li>
<li><a href="./service.html" class="nav-grid__link">事業内容</a></li>
<li><a href="./recruit.html" class="nav-grid__link">採用情報</a></li>
<li><a href="/news" class="nav-grid__link">お知らせ</a></li>
```

---

### 8. `css/style.css` — CSS変数名の不一致（8箇所）

**問題**: `common.css` で定義された変数名は `--pcAlphabetSize` / `--spAlphabetSize` だが、`style.css` では `--pcAlphabet` / `--spAlphabet` と参照しており、フォントサイズが全ページで未適用になっていた。

対象セレクタ（PC用 `--pcAlphabet` → 6箇所、SP用 `--spAlphabet` → 2箇所）:
- `.hero-intro span`
- `.slides-header span`
- `.text-header__inner span`
- `.about-text__title span`
- `.news-header__title span`
- `.recruit-header__title span`
- `.news-header__title span`（SP）
- `.recruit-header__title span`（SP）

```css
/* 修正前 */
font-size: var(--pcAlphabet);
font-size: var(--spAlphabet);

/* 修正後 */
font-size: var(--pcAlphabetSize);
font-size: var(--spAlphabetSize);
```

---

### 9. `js/main.js` — コメントと実装の不一致

**問題**: `threshold: 0.6`（60%）に対してコメントが「20%見えたら実行」になっていた。

```js
// 修正前
}, { threshold: 0.6 }); // 20%見えたら実行

// 修正後
}, { threshold: 0.6 }); // 60%見えたら実行
```

---

### 10. 全ページ — 「草津市障害福祉センター」リンクを Coming Soon ページに差し替え

**問題**: 全10ファイルで `href=""` になっており、URLも未確定だった。

**対応**: `support/welfare-center.html` を新規作成し、全ファイルのリンクを更新。

更新対象ファイル（計10ファイル）:
- ルート直下: `index.php`, `about.html`, `service.html`, `contact.php`, `recruit.html`, `policy.html`
- support配下: `kikan.html`, `hotcoco.html`, `community-support.html`
- WordPress: `news/wp-content/themes/shinshinren/footer.php`

```html
<!-- 修正前（全ファイル共通） -->
<a href="">草津市障害福祉センター</a>

<!-- 修正後（ルート直下） -->
<a href="./support/welfare-center.html">草津市障害福祉センター</a>

<!-- 修正後（support配下） -->
<a href="./welfare-center.html">草津市障害福祉センター</a>
```

---

### 11. `community-support.html` / `community-support.css` — 不要セクションの削除

**対応**: クライアント指示により以下3セクションを削除。

削除したHTMLセクション:
- `<section class="support-details">` — 「主な事業内容（草津市いきいきふれあい大運動会）」
- `<section class="support-details">` — 「主な事業内容（孤立化防止事業）」
- `<section class="contact">` — 「お問い合わせ先」

削除したCSSブロック（`community-support.css`）:
- `.support-details` / `.support-details__list` / `.support-details__list--item` およびメディアクエリ
- `.contact` / `.contact-list` / `.contact-list__item` / `.contact-category` およびメディアクエリ

---

### 12. `community-support.html` / `community-support.css` — Q&Aセクションにh3タグ追加

**対応**: クライアント指示によりQ&Aセクションを「運動会について」と「孤立化防止について」の2カテゴリに分け、見出しを追加。

追加したHTML（`community-support.html`）:
```html
<div class="qa-list">
    <h3>運動会について</h3>
    <!-- 運動会関連のアコーディオン -->
    <h3>孤立化防止事業について</h3>
    <!-- 孤立化防止関連のアコーディオン -->
</div>
```

追加したCSS（`community-support.css`）:
```css
.qa h3 {
    margin-block: 2rem;
    color: var(--mainColor);
}
```

---

### 13. `css/style.css` — `.hero-message p` フォントサイズ縮小（PC）

**問題**: クライアントよりトップページのヒーローメッセージテキストが大きすぎるとフィードバックあり。

```css
/* 修正前 */
font-size: clamp(1.5rem, 1.257rem + 1.04vw, 2.5rem); /* min: 24px / max: 40px */

/* 修正後 */
font-size: clamp(1.125rem, 1rem + 0.83vw, 2rem); /* min: 18px / max: 32px */
```

---

### 14. `css/common.css` — ヘッダーナビ・プライマリーボタンのスタイル変更

**対応**: デザイン調整依頼によりヘッダーナビゲーションとプライマリーボタンを更新。

ヘッダーナビリンク（`css/common.css`）:
```css
/* 修正後 */
color: #1C3A5E;
transition: opacity 0.2s ease;
/* hover */
opacity: 0.6;
```

プライマリーボタン（`css/common.css`）:
```css
/* 修正後 */
.primary-button {
    background-color: var(--accentColor);
    border: 1px solid var(--accentColor);
    border-radius: 50px;
    transition: background-color 0.25s ease, border-color 0.25s ease;
}
.primary-button:hover {
    background-color: #1C3A5E;
    border-color: #1C3A5E;
}
.primary-button a {
    color: #929160;
    font-weight: bold;
}
.primary-button a:hover {
    color: #fff;
}
```

---

### 15. 全ページ `.primary-button` — ホバーインタラクションの統一

**問題**: ページ固有CSSのオーバーライドにより、CTAセクション等のボタンでホバー時に背景色アニメーションが発生しなかった。

**対応**: 4ファイル・6箇所のオーバーライドに `:hover` ルールを追加し、全ボタンの挙動を統一。

```css
/* 追加パターン（各ファイル共通） */
.xxx > .primary-button:hover {
    background-color: #1C3A5E;
    border-color: #1C3A5E;
}
.xxx > .primary-button:hover a {
    color: #fff;
}
```

対象ファイル・セレクタ:
- `common.css` — `.nav-grid__sections > .primary-button`
- `common.css` — `.cta-content > .primary-button`
- `style.css` — `.news-header > .primary-button`
- `style.css` — `.recruit-header__inner > .primary-button`
- `about.css` — `.information-list__item > .primary-button`（`opacity:0.8` ホバーを背景色アニメに変更）
- `contact.css` — `.form-submit > .primary-button`（`transition: opacity` → 背景色アニメに変更）


---

## 保留事項

| 項目 | 理由 |
|------|------|
| Swiperナビゲーション（`swiper-button-next/prev/pagination`）が `swiper-wrapper` 内に配置されている | 現在ナビボタンを非表示にしているため、表示対応時にあわせて修正予定 |
| 「草津市障害福祉センター」本番URL | URL確定後に `welfare-center.html` を本番ページへ差し替え |
