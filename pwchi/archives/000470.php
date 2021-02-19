<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>pwchi's blog: 適合自己的gTLD?!</title>

<link rel="stylesheet" href="http://blog.linux.org.tw/~pwchi/styles-site.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://blog.linux.org.tw/~pwchi/index.rdf" />

<link rel="start" href="http://blog.linux.org.tw/~pwchi/" title="Home" />
<link rel="prev" href="http://blog.linux.org.tw/~pwchi/archives/000469.php" title="笨賊妙探?!" />

<link rel="next" href="http://blog.linux.org.tw/~pwchi/archives/000472.php" title="翻譯計畫進度超前" />


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
    rdf:about="http://blog.linux.org.tw/~pwchi/archives/000470.php"
    trackback:ping="http://mt.debian.org.tw/mt-tb.cgi/294"
    dc:title="適合自己的gTLD?!"
    dc:identifier="http://blog.linux.org.tw/~pwchi/archives/000470.php"
    dc:subject="黑客文化"
    dc:description="看到越來越多人都有自己的網域，最近也想要申請一個，我想要找一個個人使用看起來順眼的 gTLD ，但我始終無法決定 .org 好呢？還是 .net 好？這兩個看起來好像都不錯。 經過一番思考之後我決定註冊 pwchi.info 。 一些縱橫DN界的朋友給我建議，如果說要找適合個人用的 gTLD 網域，那麼 .info 是較好的選擇。大家覺得 .com 商業氣息太重、 .net 感覺不像個人又不像公司、 .org 又太老氣、不夠活潑。 .info 似乎就比較有個人味，也比較不那麼陳年。:-) 當然囉， gTLD 網域沒有特別限制申請人資格，如果你喜歡 .com ，就算你不是開公司，也可以申請 .com 。所以其實喜歡就好啦，不過是一個 DN ，只是我覺得要挑一個好域名還是要想一想。^_^..."
    dc:creator="pwchi"
    dc:date="2003-08-07T20:42:01+08:00" />
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
<a href="http://blog.linux.org.tw/~pwchi/archives/000469.php">&laquo; 笨賊妙探?!</a> |

<a href="http://blog.linux.org.tw/~pwchi/">回到主頁面</a>
| <a href="http://blog.linux.org.tw/~pwchi/archives/000472.php">翻譯計畫進度超前 &raquo;</a>

</div>

</div>


<div class="blog">

<h2 class="date">August 07, 2003</h2>

<div class="blogbody">

<h3 class="title">適合自己的gTLD?!</h3>

<p>看到越來越多人都有自己的網域，最近也想要申請一個，我想要找一個個人使用看起來順眼的 gTLD ，但我始終無法決定 .org 好呢？還是 .net 好？這兩個看起來好像都不錯。<br />
經過一番思考之後我決定註冊 pwchi.info 。</p>

<p>一些縱橫DN界的朋友給我建議，如果說要找適合個人用的 gTLD 網域，那麼 .info 是較好的選擇。大家覺得 .com 商業氣息太重、 .net 感覺不像個人又不像公司、 .org 又太老氣、不夠活潑。 .info 似乎就比較有個人味，也比較不那麼陳年。:-)</p>

<p>當然囉， gTLD 網域沒有特別限制申請人資格，如果你喜歡 .com ，就算你不是開公司，也可以申請 .com 。所以其實喜歡就好啦，不過是一個 DN ，只是我覺得要挑一個好域名還是要想一想。^_^</p>

<a name="more"></a>
<p>TLD = generic Top Level Domain 一般頂級網域<br />
DN = Domain Name 網域名稱</p>

<p>這有 ICANN 關於 TLDs 的一些說明，還有 gTLD 的一些資料。<br />
<a href="http://www.icann.org/tlds/">Top-Level Domains</a></p>

<span class="posted">由 pwchi 發表於 August  7, 2003 08:42 PM
| <a href="http://mt.debian.org.tw/mt-tb.cgi?__mode=view&amp;entry_id=470" onclick="OpenTrackback(this.href); return false">引用</a>

<br /></span>

</div>


<div class="comments-head"><a name="comments"></a>迴響</div>




<div class="comments-head">發表迴響</div>

<div class="comments-body">
<form method="post" action="http://mt.debian.org.tw/mt-comments.cgi" name="comments_form" onsubmit="if (this.bakecookie[0].checked) rememberMe(this)">
<input type="hidden" name="static" value="1" />
<input type="hidden" name="entry_id" value="470" />

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
