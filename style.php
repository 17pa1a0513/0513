style.php
bottom-message {
  width: 200px;
  height: 50px;
  border: 1px solid black;
  background-color: aquamarine;
  bottom: 0px;
  align-items: center;
  position: fixed;
  animation: dissappearAnimation 3s forwards;
}
@keyframes dissappearAnimation {
  0% {
  }
  90% {
  }
  100% {
    visibility: hidden;
  }
}
body {
  margin-left: 50px;
}
