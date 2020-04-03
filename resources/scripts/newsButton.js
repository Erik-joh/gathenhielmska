const NewsButton = () => {
  const newsArticles = document.querySelectorAll(".news-article");
  newsArticles.forEach(newsArticle => {
    const newsArrow = newsArticle
      .querySelector(".news-article-top")
      .querySelector(".news-arrow");
    const originalHeight = newsArticle.clientHeight;
    let clicked = false;
    const content = newsArticle.querySelector("p");
    newsArrow.addEventListener("click", () => {
      if (clicked) {
        clicked = false;
        newsArticle.style.height = `${originalHeight}px`;
        content.style.display = "none";
      } else {
        content.style.display = "block";
        clicked = true;
        newsArticle.style.height = `${newsArticle.scrollHeight}px`;
      }
    });
  });
};
export default NewsButton;
