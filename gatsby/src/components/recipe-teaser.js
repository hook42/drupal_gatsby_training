import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'


const RecipeTeaser = ({imgSrc, recipeTitle, recipeDate, recipeSummary}) => (
  <div>
    <img src={withPrefix('drupal-files/' + imgSrc)} alt="" />
    <h2>{recipeTitle}</h2>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </div>
)

export default RecipeTeaser
