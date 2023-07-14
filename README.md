





## 미리 보기 👀
<br>

|Home page|Tree page|
|---|---|
|<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/4af7654e-21c8-414a-9d0b-67cfb1229193">|<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/a499d308-48af-4630-95ad-456d85c70c92">|

|Calender page |Achievements page|
|---|---|
<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/eaaf4f50-aa6d-4a19-8b8b-5e840078d017">|<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/1be66c00-fef8-4d29-afa6-227d25d13741">|


<br><br><br>



## 서평 📓
SNS와 온라인이 활발해지면서 우리들은 소통이 점차 줄고 있다. 만나자는 말만 카카오톡으로 주고 받으면 정작 만나지 않는 우리, SNS에서의 모습으로만 보여지는 나의 모습 항상 좋은 척 가면을 쓰고 거짓 감정을 표현한다. 이제는 진짜 나의 모습을 표현할 공간이 필요하다.

<br><br>



## 웹페이지 소개 🙌🏻

<b>Diary Mate 소개<b>

이번 프로젝트는 온라인으로 자신의 일기 혹은 이야기를 공유할 수 있는 커뮤니티를 제작하고 다이용자들이 보다 이용하기 쉽도록 구현하고 업적과 랭킹 시스템 (Point)을 통해서 조금의 경쟁 심리를 이용해 이용률을 높인 공유 일기 플랫폼이다. 

나의 마음을 속 시원하게 털어놓을 수 있는 든든한 친구처럼 Mate 친구라는 뜻처럼 나의 이야기를 다른 이용자와 공유하고 공감한다는 의미에서 Diary Mate라 지었다.

<br>

<p align="center">
<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/94518331-59c4-47c4-83da-22a828ffa229">
<br>
<b style="font-size:10px"><그림 1 Diary Mate 메인 페이지></b>
</p>
<br><br><br>





## Design 📱


a. 컨텐츠(Main view)

유저가 쉽게 접근 할 수 있도록 한 눈에 선택할 수 있는 아이템이 명확하도록 페이지를 4부분으로 나누어서 4가지의 선택지를 제공했다.  “Hover” 를 통해서 사용자가 마우스가 해당 메뉴에 다다르면 잘 동작하고 있다는 확인 동작으로 약간의 애니메이션 (CSS)를 추가했다. 각각의 버튼은 비슷한 이미지에 요소 하나만 추가해서 Active , Before 사진을 최대한 비슷하게 구현해서 이질감이 없도록 디자인을 제작했다.



<p align="center">
<img src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/89dc4557-3057-459f-8bc6-784b9da69153">
<br>
<b style="font-size:10px"><그림 2 Diary Mate 메인 페이지 2></b>
</p>
<br><br><br>




b. 반응형 웹

위에서 언급한 내용처럼 웹 페이지 사이즈에 따라서 웹 구성 요소들이 뭉개 지거나 사라질 수 있는 문제가 발생한다. 이를 해결하기 위해서 Java script를 통해서 사용자 반응 웹 페이지를 구현하여 해결한다. 

<p align="center">
<img src="https://github.com/2-say/OS-Scheduling-Algorithm-TeamProject/assets/91319157/54c93ab4-f2c7-4911-918c-80a115289983">
<br>
<b style="font-size:10px"><그림 3 반응형 웹 페이지 동작></b>
</p>
<br><br><br>





c. 메뉴 View 기능 

메뉴를 보여주기 위해서 클릭하면 전체적인 화면을 하나의 블록으로 페이지를 덮고 그 위에 z-index 속성을 이용해서 해당 메뉴를 띄워 더욱 깔끔하게 사용자가 필요한 부분만 제공할 수 있도록 제작했다. 다시 X 버튼을 눌러 background를 z-index로 맨 뒤로 보내어 다시 보던 페이지를 다시 보여준다.


<p align="center">
<img src="https://github.com/2-say/OS-Scheduling-Algorithm-TeamProject/assets/91319157/c88a56d5-2c6a-42c2-80de-d940f28e28ff">
<br>
<b style="font-size:10px"><그림 4 메뉴 버튼 클릭 반응형 웹 페이지 동작></b>
</p>
<br><br><br>












## 서비스 주요 기능 🚀

#### (1) 나무형태로 볼 수 있는 작성 페이지
나무를 컨셉으로 31개의 열매(사과)로 구현하여 오늘의 일기를 작성하면 열매를 나무에 다는 식으로 만들었다. 따라서 오늘의 날짜 데이터를 받아 해당 날짜 개수만큼 나무에 사과를 표시한다.

오늘의 사과는 흔들리는 애니메이션을 통해서 오늘의 일기를 작성하도록 촉구하는 페이지를 만들었다.

<p align="center">
<img style="width:300px" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/350d2055-a46c-4075-990e-097e03ef1c7d">
<img style="width:300px" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/67ec7075-14c8-4bc3-8b1b-945e9430e148">
<br>
<b style="font-size:10px"><그림 5 오늘의 나무 쓰기 페이지></b>
</p>
<br>




#### (2) 일기 공유 커뮤니티
작성한 일기는 데이터베이스에 저장되며 다른 이용자들도 게시글을 확인할 수 있고 공감, 혹은 댓글을 남길 수 있다. 다른 이용자들에 일기와 여러가지 일기를 한 눈에 볼 수 있으며 인기 , 최근, 이웃, 모든 일기 등으로 분류하여 더욱 쉽게 원하는 일기를 볼 수 있도록 지원한다.
<p align="center">
<img style="width:450px" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/88e443c4-bdbb-408d-a1b0-1329fc35c409">
<br>
<b style="font-size:10px"><그림 6 일기 공유 페이지></b>
</p>
<br>


#### (3) 감정 캘린더
해당 날짜에 일기마다 기분을 기록할 수 있는데, 기록했던 감정들을 달력 형태로 한눈에 볼 수 있도록 View 페이지를 구현한다. 또한, 해당 날짜에 일기를 확인할 수 있고 감정은 이모티콘 모양을 통해서 제공하여 더욱 가시적으로 편하게 확인 할 수 있다.
<p align="center">
<img style="width:300px;" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/555dbff2-3c6c-40d0-8086-7a15df6e9140">
<img style="width:300px;" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/cf699cea-b523-4e3c-b6aa-7cb9d22e8ab2">
<br>
<b style="font-size:10px"><그림 8 감정 캘린더 페이지 view></b>
<br>

</p>



<br>


#### (4) 업적 시스템
이 플랫폼은 기본적으로 다양한 일기가 있어야 사용자들이 볼 수 있기 때문에 많은 일기가 요구된다. 따라서 많은 일기를 작성을 유발할 수 있도록 업적 시스템을 구현했다. 사용자별 경험치 즉, Point가 있으며 업적을 달성할 수록 Point가 증가하고 그 Point 를 기반으로 다른 이용자와 차별된 랭크를 부여하여 사용자가 더욱 뿌듯함을 느껴 활발한 이용을 유발할 수 있도록 랭킹 시스템을 구현했다.
<p align="center">
<img style="width:450px;" src="https://github.com/2-say/KUT_TermProject_Diary/assets/91319157/281a769f-093a-4b36-bd5a-673415669103">
<br>
<b style="font-size:10px"><그림 9 업적 페이지></b>
</p>
<br>



## DB 정보 

user Table 👨🏻‍🦱

<br>

|필드명|데이터형|Null|추가 사항|설명|
|------|---|---|----|----|
|num|Int|Not null|Primary key, auto_increment|일련번호|
|Id|Char(15)|Not null| |아이디|
|Pass|Char(15)|Not null| |비밀번호|
|Name|Char(15)|Not null| |이름|
|Email|Char(80)| | |이메일 주소|
|Regist_day|Char(20)| | |가입일|
|Level|Int| | |회원 레벨|
|Point|Int| | |회원 포인트|

<br><br><br><br>
Board Table 🧾
<br><br>


|필드명|데이터형|Null|추가 사항|설명|
|------|---|---|----|----|
|num|Int|Not null|Primary key, auto_increment|일련번호|
|Category|Char(15)|Not null| |일기 분류|
|Subject|Char(15)|Not null| |일기 제목|
|Content|Text|Not null| |글 내용|
|Name|Char(10)|Not null | |작성자 이름|
|Regist_day|Char(20)| | |작성 일시|
|Hit|Int|Not null| |조회수|
|login_id|Char(15)| | |작성자 아이디|
|File_name|Char(40)| | |파일명|
|File_type|Char(40)| | |파일 형식|
|File_copied|Char(40)| | |저장 파일명|
|Feeling|Char(15)| | |일기감정 표시|


<br><br><br><br><br>





## 개발 후기 🤔

<br>

저는 컴퓨터공학부 3학년 모바일 프로그래밍 수업에서 배운 내용을 기반으로 다이어리 페이지를 제작했습니다. 비록 코드나 구성 자체는 아직 완벽하게 정리되어 있지 않았지만, 그럼에도 불구하고 빈 화면에서부터 무언가를 채워나가는 과정이 너무 흥미로워서 시간 가는 줄 모르고 열심히 작업했습니다.

<br><br><br><br>

처음에는 머리속으로만 상상하며 바로 코드로 구현하는 것이 비교적 수월했지만, 실제로 다양한 기기에 대응하고 예외 처리, 데이터베이스 SQL 문 작성 등 예상치 못한 다양한 고려 사항이 생겼습니다. 이러한 문제에 직면하면서 설계 단계에서 요구사항과 기능을 명확히 정의하고, 데이터베이스 구조를 신중하게 설계하는 것이 프로젝트를 효율적으로 진행하는 데 도움이 될 것이라는 것을 깨달았습니다.

<br><br><br>

앞으로 프로젝트에 참여할 때는 구체적이고 명확한 설계를 통해 요구사항을 정의하고, 데이터베이스 구조를 신중하게 설계하여 효율적인 개발을 할 수 있도록 노력할 것입니다. 

이러한 설계 단계의 중요성을 인지하게 되었으며, 앞으로는 프로젝트의 성공과 품질 향상을 위해 철저한 설계를 통해 진행할 것입니다.




<br>
<br>
<br>

## 감사합니다 

<img src="https://user-images.githubusercontent.com/91319157/208434073-c834c893-2aed-4ded-a079-dff65540063f.gif" width="30%"> 
