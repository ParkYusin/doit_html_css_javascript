var currentYear = 2024;
var birthYear = prompt("출생년도?","2000");
var age;

age = currentYear - birthYear + 1 ;
document.write(currentYear + "년 현재<br>");
document.write(birthYear + "년에 태어난 사람의 나이는 " + age + "살 이니다.");
