import { FC, useEffect, useState } from "react";
import { Link } from "@tanstack/react-router";
import { Content } from "../customTypes";
import contents from "../contents/index";
import dates from "../utils/dates";

type Props = { limit?: number };

const BlogList: FC<Props> = ({ limit }) => {
  const [publishedContents, setPublishedContents] = useState<Content[]>([]);

  useEffect(() => {
    let contentsList = contents.filter((content) => !content.draft);
    if (limit) {
      contentsList = contentsList.slice(0, limit);
    }
    setPublishedContents(contentsList);
  }, [limit]);

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
