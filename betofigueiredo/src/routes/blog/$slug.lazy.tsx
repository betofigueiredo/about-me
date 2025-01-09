import { useEffect, useState } from "react";
import { createLazyFileRoute, Link } from "@tanstack/react-router";
import { Content } from "../../customTypes";
import contents from "../../contents/index";
import dates from "../../utils/dates";

export const Route = createLazyFileRoute("/blog/$slug")({
  component: RouteComponent,
});

function RouteComponent() {
  const { slug } = Route.useParams();
  const [previousPost, setPreviousPost] = useState<Content | null>(null);
  const [currentPost, setCurrentPost] = useState<Content | null>(null);
  const [nextPost, setNextPost] = useState<Content | null>(null);

  useEffect(() => {
    for (let idx = 0; idx < contents.length; idx++) {
      if (contents[idx].slug === slug) {
        setPreviousPost(contents[idx - 1] || null);
        setCurrentPost(contents[idx]);
        setNextPost(contents[idx + 1] || null);
      }
    }
  }, [slug]);

  if (!currentPost) {
    // TODO:
    return <div>Post not found</div>;
  }

  return (
    <div className="mb-44">
      <p className="mt-24 text-center text-sm text-gray-700 tracking-wider">
        {dates.format(currentPost.publishedAt)}
      </p>
      <h1 className="md:text-8xl md:leading-[1.1] text-3xl mt-8 mb-14 font-bold text-[#212830] font-display text-center">
        {currentPost.title}
      </h1>
      {currentPost.content}
      {currentPost.tags.map((tag) => (
        <span key={tag}>#{tag}</span>
      ))}
      <div className="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]" />
      <div className="flex justify-between space-x-4 text-sm uppercase font-sans font-medium tracking-widest">
        <div>{previousPost?.title}</div>
        <div>
          {nextPost && (
            <Link
              to={`/blog/$slug`}
              params={{ slug: nextPost.slug }}
              className="hover:text-[#475763] transition-all"
            >
              {nextPost.title} →
            </Link>
          )}
        </div>
      </div>
    </div>
  );
}
