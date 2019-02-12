import React from "react"
import { withPrefix } from 'gatsby'
import { graphql } from "gatsby"
import Layout from "../components/layout"

const RecipePage = ({ data }) => (
  <Layout>
    <article>
      <h1>{data.nodeRecipe.title}</h1>
      <i><p className="publication-date">{data.nodeRecipe.created}</p></i>
      <img src={withPrefix('drupal-files/' + data.nodeRecipe.relationships.field_image.filename)} />
      <div class="details" style={{
        display: 'flex',
        flexDirection: 'column',
        padding: '1em 0',
      }}>
        <h2>Overview</h2>
        <span>Preparation time: {data.nodeRecipe.field_preparation_time}</span>
        <span>Cooking time: {data.nodeRecipe.field_cooking_time}</span>
        <span>Difficulty: {data.nodeRecipe.field_difficulty}</span>
        <span>Number of servings: {data.nodeRecipe.field_number_of_servings}</span>
      </div>
      <h2>Instructions</h2>
      <span dangerouslySetInnerHTML={{__html: data.nodeRecipe.field_recipe_instruction.processed}}></span>
    </article>
  </Layout>
)

export const query = graphql`
  query($slug: String!) {
    nodeRecipe (fields: { slug: { eq: $slug } }) {
      id
      title
      field_difficulty
      field_ingredients
      field_cooking_time
      field_preparation_time
      field_number_of_servings
      field_recipe_instruction {
        value
        format
        processed
      }
      created(formatString: "MMMM Do, YYYY")
      relationships {
        field_image {
          id
          filename
        }
      }
    }
  }
`

export default RecipePage
