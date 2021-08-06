<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<title>카톡 공유</title>
</head>
<body>
    <input type="button" onClick="sendLinkDefault();" value="Default"/>
<script>
try {
  function sendLinkDefault() {
    Kakao.init('d9d73704ebd737b5760c728a51e9eff6')
    Kakao.Link.sendDefault({
      objectType: 'feed',
      content: {
        title: '대답하라 오바!!',
        description: 'Please react!',
        imageUrl:
          'https://media2.giphy.com/media/102Acq7aMrMmac/giphy.gif?cid=ecf05e47p4e61gebm5r488lnc0rci4ttppg5l4cpjkl49zih&rid=giphy.gif&ct=g',
        link: {
          mobileWebUrl: 'http://106.242.52.73/',
          webUrl: 'http://106.242.52.73/',
        },
      },
      buttons: [
        {
          title: '약속잡기',
          link: {
            mobileWebUrl: 'http://106.242.52.73/meet.php',
            webUrl: 'http://106.242.52.73/meet.php',
          },
        },
      ],
    })
  }
; window.kakaoDemoCallback && window.kakaoDemoCallback() }
catch(e) { window.kakaoDemoException && window.kakaoDemoException(e) }
</script>
   
</body>
</html>