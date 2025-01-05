import { createLazyFileRoute } from "@tanstack/react-router";
import contents from "../../contents/index";
import dates from "../../utils/dates";

export const Route = createLazyFileRoute("/blog/$slug")({
  component: RouteComponent,
});

function RouteComponent() {
  const { slug } = Route.useParams();
  const post = contents.find((content) => content.slug === slug);

  if (!post) {
    // TODO:
    return <div>Post not found</div>;
  }

  return (
    <div className="mb-44">
      <p className="mt-24 text-center text-sm text-gray-700 tracking-wider">
        {dates.format(post.publishedAt)}
      </p>
      <h1 className="md:text-8xl md:leading-[1.1] text-3xl mt-8 mb-14 font-bold text-[#212830] font-display text-center">
        {post.title}
      </h1>
      {post.content}
    </div>
  );
}
