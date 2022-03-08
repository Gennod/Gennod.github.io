<?php
/*

Template Name: Страница FAQ

*/

get_header();
?>

<div class="faq">
    <h1 class="faq__title">FAQ</h1>
    <h2 class="faq__subtitle">What is NFT?</h2>
    <p class="faq__text">A non-fungible token (NFT) is a unique and non-interchangeable unit of data stored on a blockchain, a form of digital ledger. It can belong to a specific person, or a specific company. This is a way to stand out, show your worth and importance, increase the trust and loyalty of your audience. In our case, each token is assigned to a Telegram username, which confirms the right to own a digital asset.
    </p>
    <h2 class="faq__subtitle">How to create a wallet TON?</h2>
    <p class="faq__text">In order to purchase NFTs kingyTON on our platform, you need to go to <a href="http://t.me/CryptoBot?start=r-68360">@CryptoBot</a> and press /start. Next, you need to click /wallet and replenish your wallet. How to buy TON is written below. After replenishment, return to <a href="<?php the_field("faq_site-addrs") ?>"><?php the_field("faq_site-addrs") ?></a>, select the NFT Russkirave you like and click "Buy".
    </p>
    <h2 class="faq__subtitle">Where can I buy TON?</h2>
    <ul class="faq__list">
        <li class="faq__list-item"><a target="_blank" href="http://t.me/CryptoBot?start=r-68360-market">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/cryptobot.jpeg" alt="cryptobot">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">Crypto Bot</h3>
                    <p class="faq__item-descr">Simple & Powerful</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://app.1inch.io/#/1/swap/ETH/DAI">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/1inch.svg" alt="1inch">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">1inch</h3>
                    <p class="faq__item-descr">DEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://www.okex.com/trade-spot/toncoin-usdt">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/okex.png" alt="okex">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">OKEx</h3>
                    <p class="faq__item-descr">CEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://exchange.mercuryo.io/?currency=TONCOIN">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/mercuryo.svg" alt="mercuryo">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">Mercuryo</h3>
                    <p class="faq__item-descr">Fiat Onramp</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://pancakeswap.finance/swap?outputCurrency=0x76A797A59Ba2C17726896976B7B3747BfD1d220f">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/pancake.svg" alt="pancakeswap">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">Pancake Swap</h3>
                    <p class="faq__item-descr">DEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://ftx.com/trade/TONCOIN/USD">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/ftx.png" alt="ftx">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">FTX</h3>
                    <p class="faq__item-descr">CEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://app.uniswap.org/#/swap?outputCurrency=0x582d872a1b094fc48f5de31d3b73f2d9be47def1">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/uniswap.svg" alt="uniswap">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">Uniswap</h3>
                    <p class="faq__item-descr">DEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://app.dodoex.io/exchange/ETH-USDC?network=mainnet">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/dodo.png" alt="dodo">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">Dodo</h3>
                    <p class="faq__item-descr">DEX</p>
                </div>
            </a></li>
        <li class="faq__list-item"><a target="_blank" href="https://t.me/otcplace">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/otn.jpeg" alt="otc">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">OTC</h3>
                    <p class="faq__item-descr">Buy and sell Ton Coin</p>
                </div>
            </a></li>
        <!-- <li class="faq__list-item"><a target="_blank" href="https://exmo.me/ru/trade/TONCOIN_BTC">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/exmo.svg" alt="exmo">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">EXMO</h3>
                    <p class="faq__item-descr">CEX</p>
                </div>
            </a></li> -->
        <li class="faq__list-item"><a target="_blank" href="https://www.gate.io/trade/TONCOIN_USDT">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/faq/gateio.jpg" alt="gateio">
                <div class="faq__list-item-info">
                    <h3 class="faq__item-title">gate.io</h3>
                    <p class="faq__item-descr">Exchange</p>
                </div>
            </a></li>
    </ul>
    <h2 class="faq__subtitle">How can I sell NTF?</h2>
    <p class="faq__text">In order to sell NFT kingyTON, use the <a href="/">"Dashboard"</a> section. Currently, a personal account is being developed. After the development of NFT standards by the developers of The Open Network, it became possible to transfer a unique token to another person through smart-contracts.
    </p>
    <div class="faq__name faq__name--center">
        Subscribe or ask a question<br><br>
        <a href="https://t.me/russkirave_community" class="faq__social">
            <div class="faq__social-inner">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.45777 16.6546L8.37511 13.0893C8.37377 13.0879 5.27377 12.1213 5.27377 12.1213C4.91911 12.0106 4.90177 11.5133 5.24977 11.3799L17.0511 6.82792C17.4871 6.65992 17.9364 7.04259 17.8404 7.49992L15.8578 16.8439C15.7418 17.3919 15.0978 17.6359 14.6484 17.3026L11.8324 15.2226L10.1724 16.8386C9.93911 17.0626 9.55244 16.9626 9.45777 16.6546V16.6546Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Channel
            </div>
        </a>
    </div>
</div>

<?php
get_footer();
?>