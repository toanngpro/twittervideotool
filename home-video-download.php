<?php
/*
Template Name: Home Video Download
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Video Tool - Twitter動画ダウンローダー</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="header-title">
                    <span>📹</span>
                    <h1>Twitter Video Tool</h1>
                </div>
                <p class="header-subtitle">
                    Twitter上の動画やGIFをダウンロード・保存するための無料オンラインツール
                </p>
                <div class="warning-banner">
                    <span>⚠️</span>
                    警告！不正な動画のダウンロードは禁止されています。
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Main Download Section -->
            <section class="section">
                <div class="download-card">
                    <div class="card-header">
                        <h2 class="card-title">Twitterから動画をダウンロード！</h2>
                        <p class="card-subtitle">ツイートのURLを入力するだけで簡単にダウンロードできます</p>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <div class="input-container">
                                <input
                                    type="url"
                                    id="twitterUrl"
                                    class="url-input"
                                    placeholder="ツイートのURLをここに貼り付け..."
                                />
                                <span class="input-icon">🔗</span>

                                <svg class="lightning-svg">
                                    <path class="electric-snake" stroke="#FFFFFF" stroke-width="2.48" fill="none"
                                          d="M 172.96,248.06 L 161.20,250.40 L 151.13,248.17 L 136.96,248.99 L 128.43,252.80 L 122.63,247.84 L 110.53,251.24 L 97.70,254.38 L 89.01,249.12 L 82.59,251.62"
                                          style="opacity: 0.675;">
                                    </path>
                                </svg>
                            </div>
                            <button onclick="handleDownload()" class="download-btn">
                                <span>⬇️</span>
                                ダウンロード
                            </button>
                        </div>
                        <div class="keywords-box">
                            <h3 class="keywords-title">関連検索キーワード：</h3>
                            <p class="keywords-text">
                                twitter video tool、video tool 24、twitter動画保存ランキング、 video tool リアルタイム、ツイッター 保存 ランキング
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Usage Guide Section -->
            <section class="section">
                <div class="usage-guide">
                    <h2 class="section-title">安全でシンプルなTwitter Video Toolの使い方</h2>
                    <div class="guide-grid">
                        <!-- Download Method -->
                        <div class="guide-card download">
                            <div class="guide-header">
                                <h3 class="guide-title green">
                                    <span>⬇️</span>
                                    ダウンロード方法
                                </h3>
                            </div>
                            <div class="guide-content">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <p class="step-text">
                                        ページ上部にあるフォームに、保存したい動画が投稿されているツイートのURLをペーストします。
                                    </p>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <p class="step-text">
                                        「ダウンロード」ボタンをクリックし、簡単に動画をダウンロードできます。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Save Method -->
                        <div class="guide-card save">
                            <div class="guide-header">
                                <h3 class="guide-title blue">
                                    <span>💾</span>
                                    保存方法
                                </h3>
                            </div>
                            <div class="guide-content">
                                <div class="device-info">
                                    <div class="device-header">
                                        <span>📱</span>
                                        <span class="device-name">iPhoneの場合：</span>
                                    </div>
                                    <p class="device-text">
                                        「Clipbox+」などのアプリを使って保存したり、最新iOSでは動画リンクを長押しすることでダウンロードが選択可能です。
                                    </p>
                                </div>
                                <div class="device-info">
                                    <div class="device-header">
                                        <span>🤖</span>
                                        <span class="device-name">Androidの場合：</span>
                                    </div>
                                    <p class="device-text">
                                        動画再生時に右下の「ダウンロード」ボタンを押して保存、または動画リンクを長押しで簡単に保存できます。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notice Section -->
                    <div class="guide-card notice">
                        <div class="guide-header">
                            <h3 class="guide-title orange">通報・削除のリクエストについて</h3>
                        </div>
                        <div class="guide-content">
                            <p class="step-text" style="margin-bottom: 1rem;">
                                Twitter Video Toolは著作権保護に配慮しており、不正な動画リンクの通報や削除リクエストは24時間以内に対応されます。 
                                該当ツイートや動画のURLを通報することで、適切な対応が迅速に行われます。
                            </p>
                            <p class="step-text">
                                また、Twitter側で動画が削除された場合、Twitter Video Toolのリンクも自動的に削除されるため、安心して利用できます。
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="section">
                <div class="faq-section">
                    <h2 class="section-title">よくある質問（FAQs）</h2>
                    <div class="faq-grid">
                        <div>
                            <div class="faq-card">
                                <div class="guide-header">
                                    <h3 class="guide-title">よくある質問</h3>
                                </div>
                                <div class="guide-content" style="padding-top: 0;">
                                    <div class="accordion-item">
                                        <button onclick="toggleAccordion('faq1')" class="accordion-button">
                                            Twitter Video Toolは無料ですか？
                                            <span>▼</span>
                                        </button>
                                        <div id="faq1" class="accordion-content">
                                            <p class="accordion-text">
                                                はい、Twitter Video Toolは完全に無料でご利用いただけます。登録や料金は一切必要ありません。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button onclick="toggleAccordion('faq2')" class="accordion-button">
                                            どのデバイスで利用できますか？
                                            <span>▼</span>
                                        </button>
                                        <div id="faq2" class="accordion-content">
                                            <p class="accordion-text">
                                                PC、スマートフォン、タブレットなど、インターネットに接続されたあらゆるデバイスでご利用いただけます。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button onclick="toggleAccordion('faq3')" class="accordion-button">
                                            ダウンロードできない場合の対処法は？
                                            <span>▼</span>
                                        </button>
                                        <div id="faq3" class="accordion-content">
                                            <p class="accordion-text">
                                                URLが正しいか確認し、ツイートが公開設定になっているかチェックしてください。それでも解決しない場合は時間をおいて再試行してください。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button onclick="toggleAccordion('faq4')" class="accordion-button">
                                            YouTubeの動画もダウンロードできますか？
                                            <span>▼</span>
                                        </button>
                                        <div id="faq4" class="accordion-content">
                                            <p class="accordion-text">
                                                いいえ、このツールはTwitter専用です。YouTubeや他のプラットフォームの動画には対応していません。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button onclick="toggleAccordion('faq5')" class="accordion-button">
                                            個人利用以外で動画を使えますか？
                                            <span>▼</span>
                                        </button>
                                        <div id="faq5" class="accordion-content">
                                            <p class="accordion-text">
                                                個人利用に限定してください。商用利用や著作権を侵害する使用は禁止されています。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <!-- Warning Card -->
                            <div class="guide-card warning-card">
                                <div class="guide-header">
                                    <h3 class="guide-title orange">
                                        <span>⚠️</span>
                                        注意事項と利用上のポイント
                                    </h3>
                                </div>
                                <div class="guide-content">
                                    <div>
                                        <h4 class="subsection-title">対応動画：</h4>
                                        <p class="subsection-text">
                                            Twitter Video ToolはTwitter専用のダウンロードツールであり、YouTube、ニコニコ動画、Vimeo、Vineなどの他の動画サービスには対応していません。
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="subsection-title">著作権について：</h4>
                                        <p class="subsection-text">
                                            著作権者の許可なくアップロードされた動画のダウンロードは法律で禁じられています。当サービスは個人利用を目的として提供されているため、商用利用などの不正使用は避けてください。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Info Card -->
                            <div class="guide-card info-card">
                                <div class="guide-header">
                                    <h3 class="guide-title blue">
                                        <span>ℹ️</span>
                                        Twitter Video Toolとは？
                                    </h3>
                                </div>
                                <div class="guide-content">
                                    <p class="info-text">
                                        Twitter Video Toolは、Twitter上の動画やGIFをダウンロード・保存するための無料オンラインツールです。 
                                        Twitterの公開動画を手軽に取得できるため、ユーザーからは「Twitter Video Downloader」として愛用されています。 
                                        ただし、当サイトではTwitterの動画を収集・アップロードしておらず、すべての動画はTwitter社のサーバーに保管されています。 
                                        利用者が動画のURLを入力するだけでダウンロードができる便利なツールです。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <span>📹</span>
                    <span class="brand-text">Twitter Video Tool</span>
                </div>
                <div class="footer-info">
                    <p class="copyright">© 2024 Twitter Video Tool. All rights reserved.</p>
                    <p class="made-with">
                        Made with <span class="heart">❤️</span> for Japanese users
                    </p>
                </div>
            </div>
            <div class="footer-notice">
                <p class="notice-text">
                    注意：このツールは教育目的でのみ使用してください。著作権法を遵守し、個人利用のみに留めてください。
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script>
        function handleDownload() {
            const twitterUrl = document.getElementById('twitterUrl').value;
            if (!twitterUrl) {
                alert('ツイートのURLを入力してください。');
                return;
            }
            alert('ダウンロード機能は現在開発中です。実際のツールではここで動画のダウンロードが開始されます。');
        }

        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const button = content.previousElementSibling.querySelector('span');
            
            if (content.classList.contains('open')) {
                content.classList.remove('open');
                button.textContent = '▼';
            } else {
                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(item => {
                    if (item.id !== id) {
                        item.classList.remove('open');
                        item.previousElementSibling.querySelector('span').textContent = '▼';
                    }
                });
                
                content.classList.add('open');
                button.textContent = '▲';
            }
        }
    </script>
</body>
</html>