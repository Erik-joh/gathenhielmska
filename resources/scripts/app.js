const frontPage = document.querySelector("body");
const newsArticles = document.querySelectorAll(".news-article");
console.log(newsArticles);
console.log(frontPage);
const NewsButton = () => {
  newsArticles.forEach(newsArticle => {
    newsArrow = newsArticle.firstChild.lastChild;
    newsArrow.addEventListener("click", () => {
      console.log("hej");
      newsArticle.classList.toggle("news-article-tall");
    });
  });
};
NewsButton();
