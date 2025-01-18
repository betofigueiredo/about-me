import { useEffect, useState } from "react";
import { createLazyFileRoute, Link } from "@tanstack/react-router";
import { Content } from "../../customTypes";
import contents from "../../contents/index";
import utils from "../../utils";

export const Route = createLazyFileRoute("/blog/$slug")({
  component: RouteComponent,
});

function RouteComponent() {
  const { slug } = Route.useParams();
  const [previousPost, setPreviousPost] = useState<Content | null>(null);
  const [currentPost, setCurrentPost] = useState<Content | null>(null);
  const [nextPost, setNextPost] = useState<Content | null>(null);

  useEffect(() => {
    const publishedContents = utils.contents.filter({ contents });

    for (let idx = 0; idx < publishedContents.length; idx++) {
      if (publishedContents[idx].slug === slug) {
        setPreviousPost(publishedContents[idx - 1] || null);
        setCurrentPost(publishedContents[idx]);
        setNextPost(publishedContents[idx + 1] || null);
      }
    }
  }, [slug]);

  if (!currentPost) {
    // TODO:
    return <div>Post not found</div>;
  }

  return (
    <>
      <p className="mt-24 text-center text-sm text-gray-700 tracking-wider">
        {utils.dates.format(currentPost.publishedAt)}
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
        <div>
          {previousPost && (
            <Link
              to={`/blog/$slug`}
              params={{ slug: previousPost.slug }}
              className="hover:text-[#475763] transition-all"
            >
              ← {previousPost.title}
            </Link>
          )}
        </div>
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
    </>
  );
}
