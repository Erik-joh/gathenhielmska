const NewsButton = () => {
  const newsArticles = document.querySelectorAll(".news-article");
  newsArticles.forEach(newsArticle => {
    const newsArrow = newsArticle
      .querySelector(".news-article-top")
      .querySelector(".news-arrow");
    const originalHeight = newsArticle.clientHeight;
    let clicked = false;
    newsArrow.addEventListener("click", () => {
      if (clicked) {
        clicked = false;
        newsArticle.style.height = `${originalHeight}px`;
      } else {
        clicked = true;
        newsArticle.style.height = `${newsArticle.scrollHeight}px`;
      }
    });
  });
};
export default NewsButton;
