# inception



## 프로젝트 설명
<img width="756" alt="image" src="https://user-images.githubusercontent.com/47822403/209944376-3ca39e1d-0b57-44ad-82a0-3a2b31ab452a.png">
- 42Seoul 프로젝트, docker, docker-compose를 활용하여 nginx, wordpress, mariadb기반의 아키텍처를 구성하는 프로젝트입니다.
- 각 nginx, wordpress, mariadb를 서로 다른 container에서 실행시키고 docker network로 연결합니다.
- mariadb는 영속성 보장과 Write Thin Layer에서의 Copy On Write발생으로 인한 성능 저하를 방지하기 위해 Volume을 활용 합니다.

## Docker 주요 개념 정리
[Docker의 내부 매커니즘](https://velog.io/@xogml951/Docker%EC%9D%98-%EB%82%B4%EB%B6%80-%EB%A7%A4%EC%BB%A4%EB%8B%88%EC%A6%98)
