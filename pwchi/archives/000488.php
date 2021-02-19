<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>pwchi's blog: gaim 0.66</title>

<link rel="stylesheet" href="http://blog.linux.org.tw/~pwchi/styles-site.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://blog.linux.org.tw/~pwchi/index.rdf" />

<link rel="start" href="http://blog.linux.org.tw/~pwchi/" title="Home" />
<link rel="prev" href="http://blog.linux.org.tw/~pwchi/archives/000487.php" title="脫離微軟魔掌" />

<link rel="next" href="http://blog.linux.org.tw/~pwchi/archives/000489.php" title="GnuPG 1.2.3 Release" />


<script type="text/javascript" language="javascript">
<!--

function OpenTrackback (c) {
    window.open(c,
                    'trackback',
                    'width=480,height=480,scrollbars=yes,status=yes');
}

var HOST = 'blog.linux.org.tw';

// Copyright (c) 1996-1997 Athenia Associates.
// http://www.webreference.com/js/
// License is granted if and only if this entire
// copyright notice is included. By Tomer Shiran.

function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires.toGMTString() : "") + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "");
    document.cookie = curCookie;
}

function getCookie (name) {
    var prefix = name + '=';
    var c = document.cookie;
    var nullstring = '';
    var cookieStartIndex = c.indexOf(prefix);
    if (cookieStartIndex == -1)
        return nullstring;
    var cookieEndIndex = c.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1)
        cookieEndIndex = c.length;
    return unescape(c.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}

function deleteCookie (name, path, domain) {
    if (getCookie(name))
        document.cookie = name + "=" + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
}

function fixDate (date) {
    var base = new Date(0);
    var skew = base.getTime();
    if (skew > 0)
        date.setTime(date.getTime() - skew);
}

function rememberMe (f) {
    var now = new Date();
    fixDate(now);
    now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000);
    setCookie('mtcmtauth', f.author.value, now, '', HOST, '');
    setCookie('mtcmtmail', f.email.value, now, '', HOST, '');
    setCookie('mtcmthome', f.url.value, now, '', HOST, '');
}

function forgetMe (f) {
    deleteCookie('mtcmtmail', '', HOST);
    deleteCookie('mtcmthome', '', HOST);
    deleteCookie('mtcmtauth', '', HOST);
    f.email.value = '';
    f.author.value = '';
    f.url.value = '';
}

//-->
</script>

<!--
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
         xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
         xmlns:dc="http://purl.org/dc/elements/1.1/">
<rdf:Description
    rdf:about="http://blog.linux.org.tw/~pwchi/archives/000488.php"
    trackback:ping="http://mt.debian.org.tw/mt-tb.cgi/312"
    dc:title="gaim 0.66"
    dc:identifier="http://blog.linux.org.tw/~pwchi/archives/000488.php"
    dc:subject="黑客文化"
    dc:description="終於把 MDK 9.1 內建的 Gaim 0.59 換成 0.66 了......"
    dc:creator="pwchi"
    dc:date="2003-08-24T01:29:38+08:00" />
</rdf:RDF>
-->




</head>

<body>

<div id="banner">
<h1><a href="http://blog.linux.org.tw/~pwchi/" accesskey="1">pwchi's blog</a></h1>
<span class="description">昨是今非，昨非今是；今是明非，今非明是。</span>
</div>

<div id="container">

<div class="blog">

<div id="menu">
<a href="http://blog.linux.org.tw/~pwchi/archives/000487.php">&laquo; 脫離微軟魔掌</a> |

<a href="http://blog.linux.org.tw/~pwchi/">回到主頁面</a>
| <a href="http://blog.linux.org.tw/~pwchi/archives/000489.php">GnuPG 1.2.3 Release &raquo;</a>

</div>

</div>


<div class="blog">

<h2 class="date">August 24, 2003</h2>

<div class="blogbody">

<h3 class="title">gaim 0.66</h3>

<p>終於把 MDK 9.1 內建的 Gaim 0.59 換成 0.66 了...</p>

<a name="more"></a>
<p>0.6 最大的改進之一，就是已經可以讀取線上 ICQ Contact List。這對使用 ICQ 的朋友真是一大福音啊。<br />
另外，0.6 對於中文相容性也加強不少，像是原本姓名暱稱部份，如果使用中文字，在 Gaim 0.5x 顯示的會是亂碼。現在 0.6 已經完全解決這個問題。還有 0.5x 在與 Windows 版 ICQ 對傳時，會遭遇否些中文顯示問題。似乎在 0.6 也已經解決。</p>

<p>只是 Mandrake 要到 9.2 才會內建 Gaim 0.6x ，我是自己先去 rpmfind.net 挖，後來找到 0.66 的 MDK 用的 RPM 包，另外在抓幾個相依性套件，才總算把 Gaim 0.66 裝起來。</p>

<p>不過，改版後的 Gaim 0.6x 真的又進步不少喔。衝啊~~ Gaim</p>

<p>相關 Gaim 的 RPM 套件，可以在 http://www.rpmfind.net/ 找到喔。^^</p>

<span class="posted">由 pwchi 發表於 August 24, 2003 01:29 AM
| <a href="http://mt.debian.org.tw/mt-tb.cgi?__mode=view&amp;entry_id=488" onclick="OpenTrackback(this.href); return false">引用</a>

<br /></span>

</div>


<div class="comments-head"><a name="comments"></a>迴響</div>




<div class="comments-head">發表迴響</div>

<div class="comments-body">
<form method="post" action="http://mt.debian.org.tw/mt-comments.cgi" name="comments_form" onsubmit="if (this.bakecookie[0].checked) rememberMe(this)">
<input type="hidden" name="static" value="1" />
<input type="hidden" name="entry_id" value="488" />

<div style="width:180px; padding-right:15px; margin-right:15px; float:left; text-align:left; border-right:1px dotted #bbb;">
	<label for="author">姓名:</label><br />
	<input tabindex="1" id="author" name="author" /><br /><br />

	<label for="email">Email 地址:</label><br />
	<input tabindex="2" id="email" name="email" /><br /><br />

	<label for="url">網址:</label><br />
	<input tabindex="3" id="url" name="url" /><br /><br />
</div>

記住我的資訊?<br />
<input type="radio" id="bakecookie" name="bakecookie" /><label for="bakecookie">是</label><input type="radio" id="forget" name="bakecookie" onclick="forgetMe(this.form)" value="Forget Info" style="margin-left: 15px;" /><label for="forget">否</label><br style="clear: both;" />

<label for="text">迴響數量:</label><br />
<textarea tabindex="4" id="text" name="text" rows="10" cols="50"></textarea><br /><br />

<input type="submit" name="preview" value="&nbsp;預覽&nbsp;" />
<input style="font-weight: bold;" type="submit" name="post" value="&nbsp;發表&nbsp;" /><br /><br />

</form>

<script type="text/javascript" language="javascript">
<!--
document.comments_form.email.value = getCookie("mtcmtmail");
document.comments_form.author.value = getCookie("mtcmtauth");
document.comments_form.url.value = getCookie("mtcmthome");
if (getCookie("mtcmtauth")) {
    document.comments_form.bakecookie[0].checked = true;
} else {
    document.comments_form.bakecookie[1].checked = true;
}
//-->
</script>
</div>


</div>
</div>
</body>
</html>
