import { FC } from "react";
import { Link } from "@tanstack/react-router";
import contents from "../contents/index";
import dates from "../utils/dates";

type Props = { limit?: number };

const BlogList: FC<Props> = ({ limit }) => {
  let publishedContents = contents.filter((content) => !content.draft);

  if (limit) {
    publishedContents = publishedContents.slice(0, limit);
  }

  return (
    <div>
      {publishedContents.map((post) => (
        <div key={post.slug} className="mb-12">
          <p className="mb-1 text-sm text-gray-600 tracking-wider">
            {dates.format(post.publishedAt)}
          </p>
          <p className="mb-1 text-4xl font-bold text-[#212830] font-display">
            <Link
              to={`/blog/$slug`}
              params={{ slug: post.slug }}
              className="hover:text-[#475763] transition-all"
            >
              {post.title}
            </Link>
          </p>
          <p className="mb-1 text-gray-600 font-serif">{post.subtitle}</p>
          <p className="font-serif">
            {post.tags.map((tag) => (
              <span key={tag}>#{tag}</span>
            ))}
          </p>
        </div>
      ))}
    </div>
  );
};

export default BlogList;
