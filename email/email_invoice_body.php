<?php
$_SESSION["cart"];
$cart = $_SESSION["cart"];
$i = count($_SESSION["cart"]);

$queryview = "SELECT * FROM product WHERE product_id IN (";
$comma = "";
foreach ($_SESSION["cart"] as $key => $value) {
    $queryview .= $comma . $key;
    $comma = ",";
}

$queryview .= ")";
$resultview = execute_query($queryview);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0060)http://aptech.createsend1.com/t/ViewEmail/t/A0C7B22C2F071EBA -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title></title>

            <style type="text/css">
                body {
                    margin: 0;
                    mso-line-height-rule: exactly;
                    padding: 0;
                    min-width: 100%;
                }
                table {
                    border-collapse: collapse;
                    border-spacing: 0;
                }
                td {
                    padding: 0;
                    vertical-align: top;
                }
                .spacer,
                .border {
                    font-size: 1px;
                    line-height: 1px;
                }
                .spacer {
                    width: 100%;
                }
                img {
                    border: 0;
                    -ms-interpolation-mode: bicubic;
                }
                .image {
                    font-size: 12px;
                    Margin-bottom: 20px;
                    mso-line-height-rule: at-least;
                }
                .image img {
                    display: block;
                }
                .logo {
                    mso-line-height-rule: at-least;
                }
                .logo img {
                    display: block;
                }
                strong {
                    font-weight: bold;
                }
                h1,
                h2,
                h3,
                p,
                ol,
                ul,
                li {
                    Margin-top: 0;
                }
                ol,
                ul,
                li {
                    padding-left: 0;
                }
                blockquote {
                    Margin-top: 0;
                    Margin-right: 0;
                    Margin-bottom: 0;
                    padding-right: 0;
                }
                .column-top {
                    font-size: 30px;
                    line-height: 30px;
                }
                .column-bottom {
                    font-size: 10px;
                    line-height: 10px;
                }
                .column {
                    text-align: left;
                }
                .contents {
                    table-layout: fixed;
                    width: 100%;
                }
                .padded {
                    padding-left: 40px;
                    padding-right: 40px;
                    word-break: break-word;
                    word-wrap: break-word;
                }
                .wrapper {
                    display: table;
                    table-layout: fixed;
                    width: 100%;
                    min-width: 620px;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
                table.wrapper {
                    table-layout: fixed;
                }
                .one-col,
                .two-col,
                .three-col {
                    Margin-left: auto;
                    Margin-right: auto;
                    width: 600px;
                }
                .centered {
                    Margin-left: auto;
                    Margin-right: auto;
                }
                .two-col .image {
                    Margin-bottom: 20px;
                }
                .two-col .column-top {
                    font-size: 40px;
                    line-height: 40px;
                }
                .two-col .column-bottom {
                    font-size: 20px;
                    line-height: 20px;
                }
                .two-col .column {
                    width: 290px;
                }
                .two-col .gutter {
                    width: 20px;
                    font-size: 1px;
                    line-height: 1px;
                }
                .three-col .image {
                    Margin-bottom: 20px;
                }
                .three-col .column-top {
                    font-size: 20px;
                    line-height: 20px;
                }
                .three-col .column-bottom {
                    font-size: 0px;
                    line-height: 0px;
                }
                .three-col .column,
                .two-col .column-narrower {
                    width: 190px;
                }
                .three-col .gutter {
                    width: 15px;
                    font-size: 1px;
                    line-height: 1px;
                }
                .three-col .padded {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .wider {
                    width: 390px;
                }
                .narrower {
                    width: 190px;
                }
                @media only screen and (min-width: 0) {
                    .wrapper {
                        text-rendering: optimizeLegibility;
                    }
                }
                @media only screen and (max-width: 620px) {
                    [class=wrapper] {
                        min-width: 280px !important;
                        width: 100% !important;
                    }
                    [class=wrapper] .one-col,
                    [class=wrapper] .two-col,
                    [class=wrapper] .three-col {
                        width: 280px !important;
                    }
                    [class=wrapper] .column,
                    [class=wrapper] .gutter {
                        display: block;
                        float: left;
                        width: 280px !important;
                    }
                    [class=wrapper] .padded {
                        padding-left: 20px !important;
                        padding-right: 20px !important;
                    }
                    [class=wrapper] .block {
                        display: block !important;
                    }
                    [class=wrapper] .hide {
                        display: none !important;
                    }
                    [class=wrapper] .image {
                        margin-bottom: 20px !important;
                    }
                    [class=wrapper] .image img {
                        height: auto !important;
                        width: 100% !important;
                    }
                }
                h1,
                h2,
                h3 {
                    font-weight: normal;
                }
                p,
                ol,
                ul {
                    font-weight: 400;
                }
                .column table,
                .padded table {
                    width: 100%;
                }
                .preheader {
                    width: 100%;
                }
                .preheader .title,
                .preheader .webversion {
                    font-size: 11px;
                    line-height: 16px;
                }
                .preheader .title {
                    padding: 9px;
                    text-align: left;
                }
                .preheader .webversion {
                    padding: 9px;
                    text-align: right;
                    width: 250px;
                }
                .preheader .webversion a {
                    font-weight: bold;
                    text-decoration: none;
                }
                .preheader .preheader-buffer {
                    font-size: 20px;
                    line-height: 20px;
                }
                .header {
                    width: 100%;
                    Margin-left: auto;
                    Margin-right: auto;
                }
                .logo {
                    padding-top: 20px;
                    padding-bottom: 40px;
                    width: 600px;
                }
                .logo div {
                    font-size: 36px;
                    line-height: 44px;
                }
                .logo div a {
                    text-decoration: none;
                }
                .logo div.logo-center {
                    text-align: center;
                }
                .logo div.logo-center img {
                    Margin-left: auto;
                    Margin-right: auto;
                }
                ul li {
                    list-style-type: disc;
                    list-style-position: outside;
                }
                .wrapper .btn a {
                    transition: background-color 0.2s;
                }
                h1 a,
                h2 a,
                h3 a {
                    text-decoration: none;
                }
                .one-col,
                .two-col,
                .three-col,
                .one-col-feature {
                    table-layout: fixed;
                }
                .one-col,
                .two-col,
                .three-col {
                    Margin-left: auto;
                    Margin-right: auto;
                }
                .one-col .padded,
                .two-col .padded,
                .three-col .padded {
                    text-align: left;
                }
                .one-col blockquote,
                .two-col blockquote,
                .three-col blockquote {
                    Margin-left: 0;
                    background-repeat: no-repeat;
                    background-position: 0px 4px;
                }
                .one-col blockquote p,
                .two-col blockquote p,
                .three-col blockquote p {
                    font-style: italic;
                }
                .column table td table:nth-last-child(2) td h1:last-child,
                .column-wider table td table:nth-last-child(2) td h1:last-child,
                .column-narrower table td table:nth-last-child(2) td h1:last-child,
                .column table td table:nth-last-child(2) td h2:last-child,
                .column-wider table td table:nth-last-child(2) td h2:last-child,
                .column-narrower table td table:nth-last-child(2) td h2:last-child,
                .column table td table:nth-last-child(2) td h3:last-child,
                .column-wider table td table:nth-last-child(2) td h3:last-child,
                .column-narrower table td table:nth-last-child(2) td h3:last-child,
                .column table td table:nth-last-child(2) td p:last-child,
                .column-wider table td table:nth-last-child(2) td p:last-child,
                .column-narrower table td table:nth-last-child(2) td p:last-child,
                .column table td table:nth-last-child(2) td ol:last-child,
                .column-wider table td table:nth-last-child(2) td ol:last-child,
                .column-narrower table td table:nth-last-child(2) td ol:last-child,
                .column table td table:nth-last-child(2) td ul:last-child,
                .column-wider table td table:nth-last-child(2) td ul:last-child,
                .column-narrower table td table:nth-last-child(2) td ul:last-child {
                    Margin-bottom: 20px;
                }
                .btn {
                    Margin-bottom: 20px;
                }
                .btn a {
                    padding-top: 15px;
                    padding-bottom: 15px;
                    font-weight: 500;
                    display: inline-block;
                    font-size: 16px;
                    line-height: 20px;
                    text-align: center;
                    text-decoration: none;
                }
                .one-col .btn a,
                .one-col-feature .btn a {
                    width: 480px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .two-col .column .btn a {
                    width: 170px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .two-col .column-narrower .btn a {
                    width: 130px;
                    padding-left: 10px;
                    padding-right: 10px;
                }
                .two-col .column-wider .btn a {
                    width: 270px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .three-col .btn a {
                    width: 130px;
                    padding-left: 10px;
                    padding-right: 10px;
                }
                .divider table {
                    font-size: 0;
                    height: 6px;
                    line-height: 6px;
                    Margin-bottom: 20px;
                }
                .separator {
                    font-size: 20px;
                    line-height: 20px;
                }
                .one-col-bg,
                .two-col-bg,
                .three-col-bg,
                .one-col-feature-bg {
                    width: 100%;
                }
                .one-col .padded ul li {
                    padding-left: 13px;
                }
                .one-col h1 {
                    font-size: 30px;
                    Margin-bottom: 16px;
                }
                .one-col h2 {
                    font-size: 20px;
                    Margin-bottom: 14px;
                }
                .one-col h3 {
                    font-size: 16px;
                    Margin-bottom: 12px;
                }
                .one-col p,
                .one-col ol,
                .one-col ul {
                    font-size: 14px;
                }
                .one-col ol,
                .one-col ul {
                    Margin-left: 48px;
                }
                .one-col ol li,
                .one-col ul li {
                    Margin-bottom: 10px;
                    padding-left: 13px;
                }
                .one-col blockquote p {
                    font-size: 18px;
                    line-height: 26px;
                }
                .one-col blockquote p,
                .one-col blockquote h1,
                .one-col blockquote h2,
                .one-col blockquote h3,
                .one-col blockquote ol,
                .one-col blockquote ul {
                    padding-left: 60px;
                }
                .one-col-feature {
                    width: 600px;
                    Margin-left: auto;
                    Margin-right: auto;
                }
                .one-col-feature h1 a,
                .one-col-feature h2 a,
                .one-col-feature h3 a,
                .one-col-feature p a,
                .one-col-feature li a {
                    text-decoration: none;
                    font-weight: normal;
                }
                .one-col-feature h1 {
                    font-size: 30px;
                    line-height: 46px;
                    Margin-bottom: 20px;
                }
                .one-col-feature h2 {
                    font-size: 24px;
                    line-height: 40px;
                    Margin-bottom: 16px;
                }
                .one-col-feature h3 {
                    font-size: 20px;
                    line-height: 30px;
                    Margin-bottom: 14px;
                }
                .one-col-feature p {
                    font-size: 18px;
                    line-height: 30px;
                    Margin-bottom: 20px;
                }
                .one-col-feature ol {
                    Margin-left: 36px;
                }
                .one-col-feature ol li {
                    padding-left: 15px;
                }
                .one-col-feature ul {
                    Margin-left: 30px;
                }
                .one-col-feature ul li {
                    padding-left: 20px;
                    line-height: 40px;
                }
                .one-col-feature ol,
                .one-col-feature ul {
                    font-size: 26px;
                    line-height: 40px;
                }
                .one-col-feature li {
                    Margin-bottom: 0;
                }
                .one-col-feature h1,
                .one-col-feature h2,
                .one-col-feature h3,
                .one-col-feature p {
                    text-align: center;
                }
                .one-col-feature blockquote {
                    Margin: 0;
                    background-repeat: no-repeat;
                    background-position: 100% 100%;
                }
                .one-col-feature blockquote p:first-child,
                .one-col-feature blockquote h1:first-child,
                .one-col-feature blockquote h2:first-child,
                .one-col-feature blockquote h3:first-child,
                .one-col-feature blockquote ol:first-child,
                .one-col-feature blockquote ul:first-child {
                    padding-top: 27px;
                }
                .one-col-feature blockquote p,
                .one-col-feature blockquote h1,
                .one-col-feature blockquote h2,
                .one-col-feature blockquote h3,
                .one-col-feature blockquote ol,
                .one-col-feature blockquote ul {
                    background-repeat: no-repeat;
                    background-position: 0% 0%;
                    font-size: 26px;
                    line-height: 40px;
                    padding: 0;
                    font-style: italic;
                }
                .one-col-feature blockquote p:last-child,
                .one-col-feature blockquote h1:last-child,
                .one-col-feature blockquote h2:last-child,
                .one-col-feature blockquote h3:last-child,
                .one-col-feature blockquote ol:last-child,
                .one-col-feature blockquote ul:last-child {
                    padding-bottom: 30px;
                    Margin-bottom: 20px;
                }
                .one-col-feature .divider {
                    Margin-bottom: 20px;
                }
                .one-col-feature .divider img {
                    display: block;
                    Margin-left: auto;
                    Margin-right: auto;
                }
                .two-col h1 {
                    font-size: 30px;
                    Margin-bottom: 16px;
                }
                .two-col h2 {
                    font-size: 20px;
                    Margin-bottom: 14px;
                }
                .two-col h3 {
                    font-size: 16px;
                    Margin-bottom: 12px;
                }
                .two-col p,
                .two-col ol,
                .two-col ul {
                    font-size: 14px;
                }
                .two-col ol,
                .two-col ul {
                    Margin-left: 18px;
                }
                .two-col li {
                    Margin-bottom: 10px;
                    padding-left: 20px;
                }
                .two-col .btn a {
                    font-size: 16px;
                    line-height: 20px;
                }
                .two-col blockquote p,
                .two-col blockquote h1,
                .two-col blockquote h2,
                .two-col blockquote h3,
                .two-col blockquote ol,
                .two-col blockquote ul {
                    padding-left: 38px;
                }
                .two-col .column-wider {
                    width: 390px;
                }
                .two-col .column-narrower {
                    width: 190px;
                }
                .three-col .column .padded,
                .two-col .column-narrower .padded {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .three-col .column h1,
                .two-col .column-narrower h1 {
                    font-size: 20px;
                    Margin-bottom: 14px;
                }
                .three-col .column h2,
                .two-col .column-narrower h2 {
                    font-size: 16px;
                    Margin-bottom: 12px;
                }
                .three-col .column h3,
                .two-col .column-narrower h3 {
                    font-size: 14px;
                    Margin-bottom: 8px;
                }
                .three-col .column p,
                .three-col .column ol,
                .three-col .column ul,
                .two-col .column-narrower p,
                .two-col .column-narrower ol,
                .two-col .column-narrower ul {
                    font-size: 14px;
                }
                .three-col .column ol,
                .three-col .column ul,
                .two-col .column-narrower ol,
                .two-col .column-narrower ul {
                    Margin-left: 18px;
                }
                .three-col .column ol li,
                .three-col .column ul li,
                .two-col .column-narrower ol li,
                .two-col .column-narrower ul li {
                    Margin-bottom: 10px;
                    padding-left: 10px;
                }
                .three-col .column .btn a,
                .two-col .column-narrower .btn a {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                .three-col .column blockquote p,
                .three-col .column blockquote h1,
                .three-col .column blockquote h2,
                .three-col .column blockquote h3,
                .three-col .column blockquote ol,
                .three-col .column blockquote ul,
                .two-col .column-narrower blockquote p,
                .two-col .column-narrower blockquote h1,
                .two-col .column-narrower blockquote h2,
                .two-col .column-narrower blockquote h3,
                .two-col .column-narrower blockquote ol,
                .two-col .column-narrower blockquote ul {
                    padding-left: 28px;
                }
                .one-col .column .contents blockquote {
                    background-image: url(http://i3.createsend1.com/static/eb/master/09-onyx/images/quote-double-large.png);
                }
                .two-col .column .contents blockquote {
                    background-image: url(http://i5.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
                }
                .three-col .column .contents blockquote,
                .two-col .column-narrower .contents blockquote {
                    background-image: url(http://i4.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
                }
                .two-col .column-narrower .contents blockquote {
                    background-image: url(http://i4.createsend1.com/static/eb/master/09-onyx/images/quote-single.png);
                }
                .two-col .column-wider .contents blockquote {
                    background-image: url(http://i5.createsend1.com/static/eb/master/09-onyx/images/quote-double.png);
                }
                .contents ul li {
                    list-style-image: url(http://i6.createsend1.com/static/eb/master/09-onyx/images/bullet.png);
                }
                .one-col-feature .contents ul li {
                    list-style-image: url(http://i7.createsend1.com/static/eb/master/09-onyx/images/bullet-large.png);
                }
                .one-col-feature .contents blockquote {
                    background-image: url(http://i8.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-feature.png);
                }
                .one-col-feature .contents blockquote p:first-child,
                .one-col-feature .contents blockquote h1:first-child,
                .one-col-feature .contents blockquote h2:first-child,
                .one-col-feature .contents blockquote h3:first-child,
                .one-col-feature .contents blockquote ol:first-child,
                .one-col-feature .contents blockquote ul:first-child {
                    background-image: url(http://i1.createsend1.com/static/eb/master/09-onyx/images/quote-top-feature.png);
                }
                .footer {
                    table-layout: fixed;
                    width: 100%;
                }
                .footer .inner {
                    padding-top: 40px;
                    padding-bottom: 75px;
                    width: 560px;
                }
                .footer table {
                    width: 100%;
                }
                .footer td {
                    text-align: left;
                    vertical-align: top;
                }
                .footer .campaign {
                    font-size: 12px;
                    line-height: 20px;
                }
                .footer .campaign a {
                    font-weight: bold;
                    text-decoration: none;
                }
                .footer .social {
                    text-transform: uppercase;
                    width: 190px;
                }
                .footer .social .padded {
                    Margin-left: 20px;
                    padding: 0;
                }
                .footer .social .padded div {
                    Margin-bottom: 10px;
                }
                .footer .social img {
                    vertical-align: middle;
                }
                .footer .social a {
                    border-bottom: none;
                    display: block;
                    font-size: 10px;
                    letter-spacing: 0.15em;
                    line-height: 12px;
                    text-decoration: none;
                }
                .footer .social a span {
                    mso-text-raise: 11px;
                }
                @media (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 620px), (min-resolution: 144dpi) and (min-width: 620px) {
                    .one-col .column .contents ul li {
                        padding-left: 38px !important;
                    }
                    .two-col .column .contents ul li {
                        padding-left: 38px !important;
                    }
                    .three-col .column .contents ul li,
                    .two-col .column-narrower .contents ul li {
                        padding-left: 28px !important;
                    }
                    .two-col .column-narrower .contents ul li {
                        padding-left: 28px !important;
                    }
                    .one-col .column .contents blockquote {
                        background-size: 40px !important;
                        background-image: url(http://i9.createsend1.com/static/eb/master/09-onyx/images/quote-double-large@2x.png);
                    }
                    .two-col .column .contents blockquote {
                        background-size: 28px !important;
                        background-image: url(http://i10.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
                    }
                    .three-col .column .contents blockquote,
                    .two-col .column-narrower .contents blockquote {
                        background-size: 15px !important;
                        background-image: url(http://i2.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
                    }
                    .two-col .column-narrower .contents blockquote {
                        background-size: 15px !important;
                        background-image: url(http://i2.createsend1.com/static/eb/master/09-onyx/images/quote-single@2x.png);
                    }
                    .two-col .column-wider .contents blockquote {
                        background-size: 28px !important;
                        background-image: url(http://i10.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png);
                    }
                }
                @media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (max-width: 620px) {
                    [class=wrapper] .one-col-feature blockquote {
                        background-size: 30px !important;
                        background-image: url(http://i3.createsend1.com/static/eb/master/09-onyx/images/quote-bottom-dark@2x.png) !important;
                        background-position: 50% 100% !important;
                    }
                    [class=wrapper] .one-col-feature blockquote p:first-child,
                    [class=wrapper] .one-col-feature blockquote h1:first-child,
                    [class=wrapper] .one-col-feature blockquote h2:first-child,
                    [class=wrapper] .one-col-feature blockquote h3:first-child,
                    [class=wrapper] .one-col-feature blockquote ol:first-child,
                    [class=wrapper] .one-col-feature blockquote ul:first-child {
                        background-size: 30px !important;
                        background-image: url(http://i5.createsend1.com/static/eb/master/09-onyx/images/quote-top-dark@2x.png) !important;
                        background-position: 50% 0% !important;
                    }
                    [class=wrapper] .contents ul li {
                        background: transparent url(http://i4.createsend1.com/static/eb/master/09-onyx/images/bullet@2x.png) no-repeat top left !important;
                    }
                    [class=wrapper] .contents ul {
                        margin-left: 0px !important;
                    }
                    [class=wrapper] .contents ul li {
                        list-style-type: none !important;
                        list-style-image: none !important;
                        background-size: 10px 10px !important;
                        background-position: 0 5px !important;
                    }
                    [class=wrapper] .one-col-feature ul {
                        margin-left: 0 !important;
                    }
                    [class=wrapper] .one-col-feature ul li {
                        list-style: none !important;
                        background: transparent url(http://i6.createsend1.com/static/eb/master/09-onyx/images/bullet-large@2x.png) no-repeat top left !important;
                        background-size: 20px !important;
                        background-position: 0 9px !important;
                        padding-left: 50px;
                    }
                }
                @media (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 620px), (min-resolution: 144dpi) and (max-width: 620px) {
                    [class=wrapper] .one-col ul {
                        margin-left: 0 !important;
                        border: 0 !important;
                    }
                    [class=wrapper] .one-col .divider table,
                    [class=wrapper] .two-col .column .divider table,
                    [class=wrapper] .two-col .column-narrower .divider table,
                    [class=wrapper] .two-col .column-wider .divider table,
                    [class=wrapper] .three-col .divider table {
                        background-image: url(http://i7.createsend1.com/static/eb/master/09-onyx/images/divider-waves@2x.png) !important;
                    }
                }
                @media only screen and (max-width: 620px) {
                    [class=wrapper] .one-col .contents blockquote p,
                    [class=wrapper] .two-col .contents blockquote p,
                    [class=wrapper] .three-col .contents blockquote p,
                    [class=wrapper] .one-col .contents blockquote h1,
                    [class=wrapper] .two-col .contents blockquote h1,
                    [class=wrapper] .three-col .contents blockquote h1,
                    [class=wrapper] .one-col .contents blockquote h2,
                    [class=wrapper] .two-col .contents blockquote h2,
                    [class=wrapper] .three-col .contents blockquote h2,
                    [class=wrapper] .one-col .contents blockquote h3,
                    [class=wrapper] .two-col .contents blockquote h3,
                    [class=wrapper] .three-col .contents blockquote h3,
                    [class=wrapper] .one-col .contents blockquote ol,
                    [class=wrapper] .two-col .contents blockquote ol,
                    [class=wrapper] .three-col .contents blockquote ol,
                    [class=wrapper] .one-col .contents blockquote ul,
                    [class=wrapper] .two-col .contents blockquote ul,
                    [class=wrapper] .three-col .contents blockquote ul {
                        padding-left: 38px !important;
                    }
                    [class=wrapper] .column table td table:nth-last-child(2) td h1:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td h1:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td h1:last-child,
                    [class=wrapper] .column table td table:nth-last-child(2) td h2:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td h2:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td h2:last-child,
                    [class=wrapper] .column table td table:nth-last-child(2) td h3:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td h3:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td h3:last-child,
                    [class=wrapper] .column table td table:nth-last-child(2) td p:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td p:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td p:last-child,
                    [class=wrapper] .column table td table:nth-last-child(2) td ol:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td ol:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td ol:last-child,
                    [class=wrapper] .column table td table:nth-last-child(2) td ul:last-child,
                    [class=wrapper] .column-wider table td table:nth-last-child(2) td ul:last-child,
                    [class=wrapper] .column-narrower table td table:nth-last-child(2) td ul:last-child {
                        Margin-bottom: 20px !important;
                    }
                    [class=wrapper] .contents blockquote {
                        background-image: url(http://i10.createsend1.com/static/eb/master/09-onyx/images/quote-double@2x.png) !important;
                        background-size: 27px !important;
                    }
                    [class=wrapper] .contents ul li {
                        padding-left: 38px !important;
                    }
                    [class=wrapper] .contents ol li {
                        padding-left: 18px !important;
                    }
                    [class=wrapper] .spacer {
                        display: none !important;
                    }
                    [class=wrapper] .header .logo {
                        padding: 40px 0 !important;
                        width: 280px !important;
                    }
                    [class=wrapper] .header .logo div {
                        font-size: 24px !important;
                        line-height: 1.3em !important;
                        margin-bottom: 0 !important;
                    }
                    [class=wrapper] .header .logo div img {
                        display: inline-block !important;
                        max-width: 280px !important;
                        height: auto !important;
                    }
                    [class=wrapper] .preheader-buffer {
                        font-size: 10px !important;
                        line-height: 10px !important;
                    }
                    [class=wrapper] .preheader .webversion,
                    [class=wrapper] .header .logo a {
                        text-align: center !important;
                    }
                    [class=wrapper] *[class*=contents] blockquote p {
                        font-size: 18px !important;
                        line-height: 26px !important;
                    }
                    [class=wrapper] *[class*=contents] h1 {
                        font-size: 30px !important;
                        line-height: 44px !important;
                        margin-bottom: 16px !important;
                    }
                    [class=wrapper] *[class*=contents] h2 {
                        font-size: 20px !important;
                        line-height: 28px !important;
                        margin-bottom: 16px !important;
                    }
                    [class=wrapper] *[class*=contents] h3 {
                        font-size: 16px !important;
                        line-height: 22px !important;
                        margin-bottom: 12px !important;
                    }
                    [class=wrapper] .column-wider,
                    [class=wrapper] .column-narrower {
                        display: block;
                        float: left;
                        width: 280px !important;
                    }
                    [class=wrapper] .one-col-feature {
                        width: 280px !important;
                    }
                    [class=wrapper] .one-col-feature li {
                        font-size: 18px !important;
                        line-height: 28px !important;
                    }
                    [class=wrapper] .one-col-feature ol {
                        margin-left: 22px !important;
                    }
                    [class=wrapper] .one-col-feature ol li {
                        padding-left: 18px !important;
                    }
                    [class=wrapper] .one-col-feature ul li {
                        background-size: 10px !important;
                        padding-left: 40px !important;
                    }
                    [class=wrapper] .one-col-feature blockquote p,
                    [class=wrapper] .one-col-feature blockquote h1,
                    [class=wrapper] .one-col-feature blockquote h2,
                    [class=wrapper] .one-col-feature blockquote h3,
                    [class=wrapper] .one-col-feature blockquote ol,
                    [class=wrapper] .one-col-feature blockquote ul {
                        font-size: 26px !important;
                        line-height: 40px !important;
                    }
                    [class=wrapper] .btn a {
                        padding: 15px 10px !important;
                        width: 220px !important;
                    }
                    [class=wrapper] .gutter {
                        font-size: 10px;
                        line-height: 10px;
                        height: 10px !important;
                    }
                    [class=wrapper] table.one-col,
                    [class=wrapper] table.one-col-feature,
                    [class=wrapper] td.last {
                        margin-bottom: 10px !important;
                    }
                    [class=wrapper] ol,
                    [class=wrapper] ul {
                        margin-left: 20px !important;
                    }
                    [class=wrapper] .preheader *[class*="column"] {
                        display: block !important;
                        text-align: center !important;
                    }
                    [class=wrapper] .preheader .title {
                        display: none !important;
                    }
                    [class=wrapper] .footer .inner {
                        padding-top: 15px !important;
                        padding-bottom: 15px !important;
                        width: 280px !important;
                    }
                    [class=wrapper] .footer .campaign,
                    [class=wrapper] .footer .social {
                        display: block !important;
                        margin-bottom: 15px !important;
                        padding-top: 15px !important;
                        text-align: center !important;
                        width: auto !important;
                    }
                    [class=wrapper] .footer .padded {
                        margin: 0 !important;
                    }
                    [class=wrapper] .one-col .divider table,
                    [class=wrapper] .two-col .column .divider table,
                    [class=wrapper] .two-col .column-narrower .divider table,
                    [class=wrapper] .two-col .column-wider .divider table,
                    [class=wrapper] .three-col .divider table {
                        background: transparent url(http://i8.createsend1.com/static/eb/master/09-onyx/images/divider-waves.png) repeat center center;
                        background-size: auto 6px !important;
                        width: 240px !important;
                    }
                    [class=wrapper] .one-col .divider table img,
                    [class=wrapper] .two-col .column .divider table img,
                    [class=wrapper] .two-col .column-narrower .divider table img,
                    [class=wrapper] .two-col .column-wider .divider table img,
                    [class=wrapper] .three-col .divider table img {
                        display: none !important;
                    }
                }
            </style><style type="text/css"></style>
            <style type="text/css">
            </style>
            <!--[if (gte mso 9)|(IE)]>
            <style>
                body {
                background-color: #ffffff;
              }
              li {
                padding-left: 5px !important;
                margin-left: 10px !important;
              }
              ul li {
                list-style-image: none !important;
                list-style-type: disc !important;
              }
              ol, ul {
                margin-left: 20px !important;
              }
            </style>
            <![endif]-->
            <!--[if gte mso 9]>
            <style>
              blockquote p {
                padding-left: 0px !important;
                margin-left: 0px !important;
              }
              .column-top {
                mso-line-height-rule: exactly !important;
              }
            </style>
            <![endif]-->
            <meta name="robots" content="noindex,nofollow">
                <meta property="og:title" content="2">
                    <link href="./A0C7B22C2F071EBA_files/social.min.css" media="screen,projection" rel="stylesheet" type="text/css">
                        <style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
                            .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
                            .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>
                        <body style="margin: 0;mso-line-height-rule: exactly;padding: 0;min-width: 100%"><style type="text/css">
                                @import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic);.wrapper,.header,.separator,.one-col-bg,.two-col-bg,.three-col-bg,.one-col-feature-bg{background-color:#1e1e1e}h1{color:#3d88fd}.wrapper h1{}.wrapper h1{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper h1{font-family:Ubuntu,sans-serif !important}}h1{}.one-col h1{line-height:44px}.two-col h1{line-height:44px}.three-col 
                                h1{line-height:28px}h2{color:#3d88fd}.wrapper h2{}.wrapper h2{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper h2{font-family:Ubuntu,sans-serif !important}}h2{}.one-col h2{line-height:28px}.two-col h2{line-height:28px}.three-col h2{line-height:22px}h3{color:#3d88fd}.wrapper h3{}.wrapper h3{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper h3{font-family:Ubuntu,sans-serif !important}}h3{}.one-col h3{line-height:28px}.two-col h3{line-height:22px}.three-col h3{line-height:20px}h1 a,h2 a,h3 a{border-bottom:1px solid #3d88fd}p,ol,ul{color:#fff}.wrapper p,.wrapper ol,.wrapper ul{}.wrapper p,.wrapper ol,.wrapper ul{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper p,.wrapper ol,.wrapper ul{font-family:Ubuntu,sans-serif !important}}p,ol,ul{}.one-col p,.one-col ol,.one-col ul{line-height:22px;Margin-bottom:20px}.two-col p,.two-col 
                                ol,.two-col ul{line-height:22px;Margin-bottom:20px}.three-col p,.three-col ol,.three-col ul{line-height:22px;Margin-bottom:20px}.image{color:#fff}.wrapper .image{}.wrapper .image{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper .image{font-family:Ubuntu,sans-serif !important}}.image{}.one-col .image{line-height:22px;Margin-bottom:20px}.two-col .image{line-height:22px;Margin-bottom:20px}.three-col .image{line-height:22px;Margin-bottom:20px}.hr hr{color:#fff;background-color:#fff}.border{background-color:#161616}.wrapper a{color:#3d88fd}.wrapper a:hover{color:#0b69fc !important}.wrapper .btn a{background-color:#3d88fd;color:#fff;border-bottom:3px solid #1d2227}.wrapper .btn a{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper .btn a{font-family:Ubuntu,sans-serif !important}}.wrapper .btn a:hover{background-color:#2479fd !important;color:#fff 
                                                                                                                                                                                                        !important}.wrapper .logo div{color:#e6e6e6}.wrapper .logo div{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper .logo div{font-family:Ubuntu,sans-serif !important}}.wrapper .logo div a{color:#e6e6e6}.wrapper .logo div a:hover{color:#e6e6e6 !important}.preheader{background-color:#161616}.preheader .title,.preheader .webversion{color:#e6e6e6}.preheader .title,.preheader .webversion{font-family:sans-serif}@media only screen and (min-width: 0){.preheader .title,.preheader .webversion{font-family:Ubuntu,sans-serif !important}}.preheader .title a,.preheader .webversion a{font-weight:bold;color:#e6e6e6}.preheader .title a:hover,.preheader .webversion a:hover{color:#e6e6e6 !important}.preheader-buffer{background-color:#1e1e1e}.contents{background-color:#212a32}.one-col-feature a{border-bottom:1px solid #3d88fd}.extra-wide 
                                .big-feature{background-color:#212a32}.footer,.emb-editor-canvas{background-color:#161616}.footer td{color:#e6e6e6}.footer td{font-family:sans-serif}@media only screen and (min-width: 0){.footer td{font-family:Ubuntu,sans-serif !important}}.wrapper .footer a{font-weight:bold;color:#e6e6e6}.wrapper .footer a:hover{color:#e6e6e6 !important}.social,.social a{color:#e6e6e6}@media (min-width:0){body{background-color:#161616}}@media (-webkit-min-device-pixel-ratio:1.5),(min-resolution:144dpi){.one-col ul{border-left:30px solid #212a32}}
                            </style>
                            <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #1e1e1e">
                                <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #161616">
                                    <tbody><tr>


                                        </tr>
                                        <tr><td class="preheader-buffer" style="padding: 0;vertical-align: top;background-color: #1e1e1e;font-size: 20px;line-height: 20px" colspan="2">&nbsp;</td></tr>
                                    </tbody></table>
                                <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;background-color: #1e1e1e">
                                    <tbody><tr>
                                            <td style="padding: 0;vertical-align: top">&nbsp;</td>
                                            <td class="logo" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;padding-top: 20px;padding-bottom: 40px;width: 600px"><div class="logo-right" style="font-size: 36px;line-height: 44px;color: #e6e6e6;font-family: sans-serif" align="right" id="emb-email-header"><a style="color: #e6e6e6;text-decoration: none" href="http://aptech.createsend1.com/t/t-l-thzsk-l-r/"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 681px" src="http://vthang.paygamesvn.com/images/PAYGAMES%20content.png" alt="" width="454" height="161"></a></div></td>
                                            <td style="padding: 0;vertical-align: top">&nbsp;</td>
                                        </tr>
                                    </tbody></table>

                                <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #1e1e1e">
                                    <tbody><tr>
                                            <td style="padding: 0;vertical-align: top" align="center">
                                                <table class="one-col centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;table-layout: fixed">
                                                    <tbody><tr>
                                                            <td class="column" style="padding: 0;vertical-align: top;text-align: left">
                                                                <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;background-color: #212a32">
                                                                    <tbody><tr>
                                                                            <td style="padding: 0;vertical-align: top">

                                                                                <div class="image" style="font-size: 12px;Margin-bottom: 20px;mso-line-height-rule: at-least;color: #fff;font-family: sans-serif;line-height: 22px" align="center">
                                                                                    <a style="color: #3d88fd" href="http://aptech.createsend1.com/t/t-l-thzsk-l-y/"><img class="gnd-corner-image gnd-corner-image-center gnd-corner-image-top" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 900px" src="http://vthang.paygamesvn.com/images/PAYGAMES%2024.jpg" alt="" width="600" height="126"></a>
                                                                                </div>

                                                                                <table style="border-collapse: collapse;border-spacing: 0;width: 100%" width="100%">
                                                                                    <tbody><tr>
                                                                                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 40px;padding-right: 40px;word-break: break-word;word-wrap: break-word;text-align: left">
                                                                                                <h1 style="Margin-top: 0;font-weight: normal;color: #3d88fd;font-family: sans-serif;font-size: 30px;Margin-bottom: 16px;line-height: 44px">Your Invoice</h1>
                                                                                                <p style="Margin-top: 0;font-weight: 400;color: #fff;font-family: sans-serif;font-size: 14px;line-height: 22px;Margin-bottom: 20px">
                                                                                                        <table style="color: white; font-family: Ubuntu; font-style: normal;">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th style="text-align: left;">Product Name</th>
                                                                                                                    <th>Product Price</th>
                                                                                                                    <th>Quantity</th>
                                                                                                                    <th>Total</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <?php
                                                                                                                $total = 0;
                                                                                                                while ($row = mysqli_fetch_assoc($resultview)) {
                                                                                                                    $total += $row["price"];
                                                                                                                    ?>
                                                                                                                    <tr>
                                                                                                                        <td class="product"><?php echo $row["title"] ?></td>
                                                                                                                        <td class="price"><?php
                                                                                                                            if (isset($row["price"])) {
                                                                                                                                echo $row["price"] * EXCHANGE_RATE;
                                                                                                                            } else {
                                                                                                                                echo 0;
                                                                                                                            }
                                                                                                                            ?> đ</td>
                                                                                                                        <td class="quantity"><?php echo $_SESSION["cart"][$row["product_id"]] ?></td>
                                                                                                                        <td class="total"><?php echo $cart[$row["product_id"]] * $row["price"] * EXCHANGE_RATE; ?> đ</td>
                                                                                                                    </tr>
                                                                                                                    <?php
                                                                                                                }
                                                                                                                ?>
                                                                                                            </tbody>
                                                                                                            <tfoot>
                                                                                                                <tr>
                                                                                                                    <th colspan="3" style="text-align: right;">
                                                                                                                        TOTAL&nbsp;&nbsp;
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <?php
                                                                                                                            echo $total * EXCHANGE_RATE;
                                                                                                                        ?>
                                                                                                                        đ
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tfoot>
                                                                                                        </table>
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>

                                                                                <div class="column-bottom" style="font-size: 10px;line-height: 10px">&nbsp;</div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>

                                <div class="separator" style="font-size: 20px;line-height: 20px;background-color: #1e1e1e">&nbsp;</div>

                                <table class="footer" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;background-color: #161616">
                                    <tbody><tr>
                                            <td style="padding: 0;vertical-align: top;text-align: left;color: #e6e6e6;font-family: sans-serif">&nbsp;</td>
                                            <td class="inner" style="padding: 0;vertical-align: top;text-align: left;color: #e6e6e6;font-family: sans-serif;padding-top: 40px;padding-bottom: 75px;width: 560px">
                                                <table style="border-collapse: collapse;border-spacing: 0;width: 100%">
                                                    <tbody><tr>
                                                            <td class="campaign" style="padding: 0;vertical-align: top;text-align: left;color: #e6e6e6;font-family: sans-serif;font-size: 12px;line-height: 20px">

                                                                <div style="line-height: 17px; font-size: 17px;">&nbsp;</div>

                                                                <div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    </tbody></table>
                                            </td>
                                            <td style="padding: 0;vertical-align: top;text-align: left;color: #e6e6e6;font-family: sans-serif">&nbsp;</td>
                                        </tr>
                                    </tbody>