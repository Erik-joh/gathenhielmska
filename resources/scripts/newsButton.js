const NewsButton = () => {
  const newsArticles = document.querySelectorAll(".news-article");
  newsArticles.forEach(newsArticle => {
    newsArrow = newsArticle.firstChild.lastChild;
    newsArrow.addEventListener("click", () => {
      newsArticle.classList.toggle("news-article-tall");
    });
  });
};
