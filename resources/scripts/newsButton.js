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
        newsArrow.classList.add("news-arrow-rotate");
      } else {
        content.style.display = "block";
        clicked = true;
        newsArticle.style.height = `${newsArticle.scrollHeight}px`;
        newsArrow.classList.remove("news-arrow-rotate");
      }
    });
  });
};
export default NewsButton;
