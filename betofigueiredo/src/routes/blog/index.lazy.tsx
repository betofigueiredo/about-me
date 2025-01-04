import { createLazyFileRoute, Link } from "@tanstack/react-router";
import contents from "../../contents/index";

export const Route = createLazyFileRoute("/blog/")({
  component: Index,
});

function Index() {
  return (
    <div className="p-2">
      <h3>Blog!</h3>
      <div>
        {contents.map((content) => (
          <div key={content.slug}>
            <Link to={`/blog/$slug`} params={{ slug: content.slug }}>
              {content.title}
            </Link>
          </div>
        ))}
      </div>
    </div>
  );
}
