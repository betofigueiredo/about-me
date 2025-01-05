import { createLazyFileRoute, Link } from "@tanstack/react-router";
import contents from "../../contents/index";
import dates from "../../utils/dates";

export const Route = createLazyFileRoute("/blog/")({
  component: Index,
});

function Index() {
  const publishedContents = contents.filter((content) => !content.draft);

  return (
    <div className="mt-20 p-2">
      <div>
        {publishedContents.map((content) => (
          <div key={content.slug} className="mb-12">
            <p className="mb-1 text-sm text-gray-600 tracking-wider">
              {dates.format(content.publishedAt)}
            </p>
            <p className="mb-1 text-4xl font-bold text-[#212830] font-display">
              <Link
                to={`/blog/$slug`}
                params={{ slug: content.slug }}
                className="hover:text-[#4E8380] transition-all"
              >
                {content.title}
              </Link>
            </p>
            <p className="mb-1 text-gray-600 font-serif">{content.subtitle}</p>
            <p className="font-serif">
              {content.tags.map((tag) => (
                <span key={tag}>#{tag}</span>
              ))}
            </p>
          </div>
        ))}
      </div>
    </div>
  );
}
