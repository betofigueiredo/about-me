import { Content } from "../customTypes";

type Props = {
  contents: Content[];
  limit?: number;
};

function filter({ contents, limit }: Props): Content[] {
  let contentsList = contents.filter((content) => !content.draft);
  if (limit) {
    contentsList = contentsList.slice(0, limit);
  }
  return contentsList;
}

const contents = {
  filter,
};

export default contents;
