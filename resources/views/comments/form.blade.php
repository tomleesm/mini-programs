<form action="{{ route('articles.comments.store', ['article' => $article->id]) }}" accept-charset="UTF-8" method="post">
    <p>
      <label for="comment_commenter">Commenter</label><br>
      <input type="text" name="comment[commenter]" id="comment_commenter">
    </p>
    <p>
      <label for="comment_body">Body</label><br>
      <textarea name="comment[body]" id="comment_body"></textarea>
    </p>
    <p>
      <label for="comment_status">Status</label><br>
      <select name="comment[status]" id="comment_status">
        <option selected="selected" value="public">public</option>
        <option value="private">private</option>
        <option value="archived">archived</option>
      </select>
    </p>
    <p>
      <input type="submit" name="commit" value="Create Comment" data-disable-with="Create Comment">
    </p>
  </form>

