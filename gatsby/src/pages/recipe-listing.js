import React from "react"
import { Link } from "gatsby"

import Layout from "../components/layout"
import SEO from "../components/seo"
import RecipeTeaser from "../components/recipe-teaser"

const RecipeListing = ({ data }) => (
  <Layout>
    <SEO title="Recipe Listing" keywords={[`gatsby`, `application`, `react`]} />
    <h1>Recipe Listing</h1>
    { data.allNodeRecipe.edges.map((recipe) => (
      <RecipeTeaser
        key={recipe.node.id}
        imgSrc={recipe.node.relationships.field_image.filename}
        recipeTitle={recipe.node.title}
        recipeSummary={recipe.node.field_summary.value}
      />
    ) )}
  </Layout>
)

export const query = graphql`
  query RecipeQuery {
  	allNodeRecipe {
      edges {
        node {
          id
          field_summary {
            value
          }
          title
          created(formatString: "MMMM Do, YYYY")
          relationships {
            field_image {
              id
              filename
              uri {
                value
                url
              }
            }
          }
        }
      }
    }
  }
`

export default RecipeListing
