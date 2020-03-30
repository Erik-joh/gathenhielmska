const NewsButton = () => {
  const newsArticles = document.querySelectorAll(".news-article");
  newsArticles.forEach(newsArticle => {
    const newsArrow = newsArticle
      .querySelector(".news-article-top")
      .querySelector(".news-arrow");
    newsArrow.addEventListener("click", () => {
      newsArticle.classList.toggle("news-article-tall");
    });
  });
};
export default NewsButton;
