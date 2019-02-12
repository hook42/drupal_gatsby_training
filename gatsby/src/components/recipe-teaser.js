import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'


const RecipeTeaser = ({imgSrc, recipeTitle, recipeDate, recipeSummary}) => (
  <article>
    <img src={withPrefix('drupal-files/' + imgSrc)} alt="" />
    <h2>{recipeTitle}</h2>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </article>
)

export default RecipeTeaser
